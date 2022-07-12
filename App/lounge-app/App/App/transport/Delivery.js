import React, { useState } from 'react';
import { StyleSheet, Text, View, TouchableOpacity, TextInput } from 'react-native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import { NavigationContainer } from '@react-navigation/native';
import BlankScreen2 from '../BlankScreen2';
import Divider from 'react-native-divider';
import colors from '../../Config/colors';






const Delivery = ({ navigation }) => {
  const [userName, setUserName] = useState("");
  const [userPostCode, setUserPostCode] = useState("");
  const [userStreetNum, setUserStreetNum] = useState("");
  const [userUnitNum, setUserUnitNum] = useState("");

  let infoUser = [userName + "," + "→" + userPostCode + "," + "→" + userStreetNum + "," + "→" + userUnitNum];

  const infoUserFindLocation = () => {
      navigation.navigate("BlankScreen2", {
        infoUser,
      })
    }
;

  return (
    <View style={styles.outercontainerForm}>

      <View style={styles.innerFormViews}>
        <Text style={styles.innerFormText}>Name:</Text>
        <TextInput placeholder='Name...' style={styles.formTextInput} onChangeText={(userName) => setUserName(userName)}
          value={userName}
      />
      </View>

      <View style={styles.innerFormViews}>
        <Text style={styles.innerFormText}>Post Code:</Text>
        <TextInput placeholder='Post Code...' style={styles.formTextInput} onChangeText={(userPostCode) => setUserPostCode(userPostCode)}
          value={userPostCode} />

      </View>


      <View style={styles.innerFormViews}>
        <Text style={styles.innerFormText}>Street Number:</Text>
        <TextInput placeholder='Street Number...' style={styles.formTextInput} onChangeText={(userStreetNum) => setUserStreetNum(userStreetNum)}
          value={userStreetNum} />
      </View>


      <View style={styles.innerFormViews}>
        <Text style={styles.innerFormText}>Unit Number:</Text>
        <TextInput placeholder='Unit Number...' style={styles.formTextInput} onChangeText={(userUnitNum) => setUserUnitNum(userUnitNum)}
          value={userUnitNum} />
      </View>

      <Divider orientation='center' />


      <View style={styles.outerButtonFindView}>
        <TouchableOpacity style={styles.outerButtonFind} onPress={() => infoUserFindLocation()}>
          <Text style={styles.innerButtonFindText}>Find Address</Text>
        </TouchableOpacity>
      </View>
    </View>
  )
}

const Stack = createNativeStackNavigator();
const screenOptions = {
  headerShown: false,
};

function Transport() {
  return (
    <NavigationContainer independent={true}>
      <Stack.Navigator initialRouteName="Home" screenOptions={screenOptions}>
        <Stack.Screen name="Delivery" component={Delivery} />
        <Stack.Screen name="BlankScreen2" component={BlankScreen2} />
      </Stack.Navigator>
    </NavigationContainer>
  )
}


const styles = StyleSheet.create({
  outercontainerForm: {
    marginHorizontal: 15,
    marginVertical: 45,
  },
  innerFormViews: {
    marginHorizontal: 10,
    marginVertical: 15,
  },
  innerFormText: {
    fontSize: 22,
    opacity: 0.7,
  },
  formTextInput: {
    backgroundColor: colors.Silver,
    borderRadius: 10,
    opacity: 0.8,
    height: 45,
    padding: 5,
  },
  outerButtonFindView: {
    alignItems: 'center',
    marginHorizontal: 10,
    marginVertical: 5,
  },
  outerButtonFind: {
    backgroundColor: colors.DimGray,
    height: 50,
    width: "100%",
    justifyContent: 'center',
    alignItems: 'center',
    borderRadius: 10,
  },
  innerButtonFindText: {
    fontSize: 23,
    color: colors.secondary,
  },
})

export default Transport;