import React, { useState } from 'react';
import { SafeAreaView, StyleSheet, Text, View, TouchableOpacity, ScrollView, Platform, Switch, } from 'react-native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import { NavigationContainer } from '@react-navigation/native';
import { MaterialCommunityIcons } from '@expo/vector-icons';
import Constants from "expo-constants";
import CookiesScreen from "./CookiesScreen";
import PolicyScreen from "./PolicyScreen";
import TermsScreen from "./TermsScreen";



const version = Constants.manifest.version;


function InfoScreen({ navigation }) {
  const [selectedValue, setSelectedValue] = useState("English");

  const [showComponent, setShowComponent] = useState(true);

  return (
    <ScrollView showsHorizontalScrollIndicator={false} showsVerticalScrollIndicator={false}>
      <View style={styles.container}>
        <TouchableOpacity onPress={() => navigation.navigate('Terms')}>
          <View style={styles.outerButtonLook}>
            <Text style={styles.title}>Terms & conditions</Text>
            <MaterialCommunityIcons name='chevron-right' color={'gray'} size={30} />
          </View>
        </TouchableOpacity>


        <TouchableOpacity onPress={() => navigation.navigate('Policy')}>
          <View style={styles.outerButtonLook}>
            <Text style={styles.title}>Privacy policy</Text>
            <MaterialCommunityIcons name='chevron-right' color={'gray'} size={30} />
          </View>
        </TouchableOpacity>


        <TouchableOpacity onPress={() => navigation.navigate('Settings')}>
          <View style={styles.outerButtonLook}>
            <Text style={styles.title}>Cookies Settings</Text>
            <MaterialCommunityIcons name='chevron-right' color={'gray'} size={30} />
          </View>
        </TouchableOpacity>

        <View style={styles.outerButtonLook}>
          <Text style={styles.title}>Dark Mode &#127772;</Text>
          <TouchableOpacity>
            <Switch
              trackColor={{ false: "#767577", true: "#009900" }}
              ios_backgroundColor="#767577" />
          </TouchableOpacity>
        </View>




        <TouchableOpacity>
          <View style={styles.outerButtonLook}>
            <Text style={styles.title}>Language</Text>
            <Text style={{ fontSize: 22, color: 'gray', marginLeft: 145, }} onPress={() => setShowComponent(false)}>{selectedValue}</Text>
            <MaterialCommunityIcons name='chevron-right' color={'gray'} size={30} onPress={() => setShowComponent(true)} />
          </View>
        </TouchableOpacity>


        <View style={{ marginLeft: 235, }} display={showComponent ? 'none' : 'flex'}>
          {/* <Picker style={{ height: 20, width: 150 }} selectedValue={selectedValue} onValueChange={(itemValue, itemIndex) => setSelectedValue(itemValue)} >
            <Picker.Item label="English" value="English" />
            <Picker.Item label="Spanish" value="Spanish" />
            <Picker.Item label="French" value="French" />
            <Picker.Item label="Arabic" value="Arabic" />
            <Picker.Item label="Nederlands" value="Nederlands" />
          </Picker> */}
        </View>


        <View style={styles.versionView}><Text>v.{Constants.expoVersion}</Text></View>
      </View>
    </ScrollView >
  );

}




const Stack = createNativeStackNavigator();
const screenOptions = {
  headerShown: true,

};


function InfoNav() {
  return (
    <NavigationContainer independent={true}>
      <Stack.Navigator initialRouteName="Home" screenOptions={screenOptions}>
        <Stack.Screen name="More" component={InfoScreen} />
        <Stack.Screen name="Terms" component={TermsScreen} />
        <Stack.Screen name="Policy" component={PolicyScreen} />
        <Stack.Screen name="Settings" component={CookiesScreen} />
      </Stack.Navigator>
    </NavigationContainer>
  )
}


const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'flex-start',
    alignItems: 'flex-start',
    marginLeft: 10,
    marginTop: 5,
  },
  outerButtonLook: {
    backgroundColor: "lightgray",
    alignItems: "center",
    padding: 13,
    borderRadius: 30,
    width: 400,
    height: 80,
    position: "relative",
    marginBottom: 20,
    flexDirection: 'row',
    justifyContent: 'space-between',
  },
  title: {
    fontSize: Platform.OS === 'android' ? 21 : 21,
    fontWeight: '500',
    padding: Platform.OS === 'android' ? 0 : 20,
  },
  versionView: {
    marginLeft: 150,
    marginTop: 85,
  },
});

export default InfoNav;