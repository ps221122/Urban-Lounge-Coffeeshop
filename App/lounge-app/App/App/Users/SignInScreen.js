import * as React from 'react';
import { Button, StyleSheet, Text, TextInput, View, TouchableOpacity, ImageBackground } from 'react-native';
import { NavigationContainer } from '@react-navigation/native';
import { useState } from 'react';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import { auth } from '../../Config/db';
import { useEffect } from 'react';
import { Input, Icon } from '@rneui/themed';
import { signInWithEmailAndPassword, sendPasswordResetEmail } from "firebase/auth";
import Divider from 'react-native-divider';
import SignUpScreen from "./SignUpScreen";
import ProfileScreen from "./ProfileScreen";



const SignInScreen = ({ navigation }) => {
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const [passwordVisible, setPasswordVisible] = useState(true);

  useEffect(() => {
    const unsubscribe = auth.onAuthStateChanged(user => {
      if (user) {
        navigation.navigate("ProfileScreen")
      }
    })

    return unsubscribe
  }, [])

  const handleLogin = () => {
    auth
      .signInWithEmailAndPassword(email, password)
      .then(userCredentials => {
        const user = userCredentials.user;
        console.log('Logged in with:', user.email);
      })
      .catch(error => alert(error.message))
  }


  const forgotPassword = () => {
    console.log("reset email sent to " + email);
    sendPasswordResetEmail(auth, email, null)
      .then(() => {
        alert("reset email sent to " + email);
      })
      .catch(function (e) {
        console.log(e);
      });
  };
  

  return (
    <ImageBackground style={styles.container} source={{ uri: "https://images.unsplash.com/photo-1564875197268-d336949dc1a9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8M3x8fGVufDB8fHx8&w=1000&q=80" }} resizeMode={'cover'}>
      <View style={styles.shadowProp}>

        <View style={{ marginBottom: 25, }}>
          <Text style={{ fontSize: 22, color: 'white' }}>Email:</Text>
          <TextInput
            style={styles.input}
            value={email}
            placeholder="Email here....."
            onChangeText={(email) => setEmail(email)} />
        </View>

        <View style={{ marginBottom: 10, }}>
          <Text style={{ fontSize: 22, color: 'white' }}>Password:</Text>
          <Input
            containerStyle={styles.inputPassword}
            value={password}
            placeholder="Password here..."
            onChangeText={(password) => setPassword(password)} secureTextEntry={passwordVisible}
            rightIcon={<Icon type='material-community' name={passwordVisible ? "eye" : "eye-off"}
              onPress={() => setPasswordVisible(!passwordVisible)} />} />
        </View>


        <>
          <TouchableOpacity style={styles.loginButton} onPress={handleLogin}>
            <Text style={styles.loginFont}>Login</Text>
          </TouchableOpacity>
        </>


        <View style={{ marginTop: 18, }}>
          <Text style={{ marginBottom: 5, color: 'white', fontSize: 18, }} onPress={forgotPassword}>Forgot Password?</Text>
          <Divider orientation='center' width={10} color={'white'} >Of</Divider>
        </View>

        <View style={styles.logoContainer}>
          <TouchableOpacity style={styles.outerLogoView1}>
            <Text style={styles.Logo}>G</Text>
          </TouchableOpacity>

          <TouchableOpacity style={styles.outerLogoView2}>
            <Text style={styles.Logo}>F</Text>
          </TouchableOpacity>

          <TouchableOpacity style={styles.outerLogoView3}>
            <Text style={styles.Logo}>In</Text>
          </TouchableOpacity>
        </View>

        <View style={{ marginLeft: 35, fontSize: 15, }}>
          <TouchableOpacity style={{ flexDirection: 'row' }}>
            <Text style={{ color: 'white' }}>Need an account?</Text>
            <Text style={{ textDecorationLine: 'underline', paddingLeft: 3, color: 'white', }} onPress={() => navigation.navigate('SignUpScreen')}>Register</Text>
          </TouchableOpacity>
        </View>
      </View>
    </ImageBackground>
  )
}

const Stack = createNativeStackNavigator();
const screenOptions = {
  headerShown: false,
  headerTitleStyle: {
    fontSize: 0,
  },
};

function Appy() {
  return (
    <NavigationContainer independent={true}>
      <Stack.Navigator initialRouteName="Home" screenOptions={screenOptions}>
        <Stack.Screen name="Inloggen" component={SignInScreen} />
        <Stack.Screen name="SignUpScreen" component={SignUpScreen} options={{ headerShown: true }} />
        <Stack.Screen name="ProfileScreen" component={ProfileScreen} />
      </Stack.Navigator>
    </NavigationContainer>
  );
}


const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
  },
  shadowProp: {
    height: 400,
    shadowColor: '#171717',
    shadowOffset: { width: -2, height: 5 },
    shadowOpacity: 0.2,
    shadowRadius: 3,
  },
  input: {
    height: 40,
    marginTop: 5,
    borderWidth: 1,
    paddingLeft: 4,
    borderRadius: 8,
    backgroundColor: 'white',
  },
  inputPassword: {
    height: 35,
    marginTop: 5,
    borderRadius: 8,
    paddingLeft: 4,
    backgroundColor: 'white',
  },
  loginButton: {
    marginTop: 20,
    backgroundColor: "red",
    alignItems: "flex-start",
    padding: 13,
    borderRadius: 10,
    width: 250,
    position: "relative",

  },
  loginFont: {
    fontSize: 20,
    color: 'white',
    alignItems: 'center',
    justifyContent: 'center',
    textAlign: 'center',
    marginLeft: 80,
  },
  logoContainer: {
    flexDirection: 'row',
    justifyContent: 'center',
    margin: 20,
  },

  outerLogoView1: {
    backgroundColor: 'red',
    marginRight: 20,
    borderRadius: 50,
    height: 50,
    width: 50,
  },
  outerLogoView2: {
    backgroundColor: '#6495ED',
    marginRight: 20,
    borderRadius: 50,
    height: 50,
    width: 50,
  },
  outerLogoView3: {
    backgroundColor: 'blue',
    borderRadius: 50,
    height: 50,
    width: 50,
  },
  Logo: {
    color: 'white',
    fontSize: 30,
    fontWeight: '800',
    textAlign: 'center',
    paddingTop: 8,

  },

});




export default Appy;