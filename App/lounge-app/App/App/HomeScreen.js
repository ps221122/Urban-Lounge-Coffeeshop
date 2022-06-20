import React from 'react';
import { StyleSheet, Text, View, SafeAreaView, Image, TouchableOpacity, Platform, StatusBar } from 'react-native';
import { MaterialCommunityIcons } from '@expo/vector-icons';
import { createStackNavigator } from '@react-navigation/stack';
import { NavigationContainer } from '@react-navigation/native';
import colors from '../Config/colors';
import Delivery from "../App/transport/Delivery"
import PickUp from "../App/transport/PickUp"







const HomeScreen = ({ navigation }) => {
  const imageLogo = { uri: "https://e7.pngegg.com/pngimages/336/687/png-clipart-black-and-white-illustration-triskelion-spiral-scalable-graphics-celtic-triple-spiral-spiral-monochrome.png" };

  const comfyFood = { uri: "https://cdn.pixabay.com/photo/2019/12/25/17/55/cinnamon-roll-4719023_960_720.jpg" };
  return (
    <SafeAreaView style={styles.mainContainer}>
      <View style={styles.container}>
        <Image source={imageLogo} style={styles.image} />
        <Text style={styles.title}>Urban Lounge Coffeeshop</Text>
      </View>
      <View style={[styles.imageContainer, styles.shadowProp]}>
        <Image source={comfyFood} style={styles.comyFoodImage} blurRadius={0.5} />
      </View>
      <View>
        <TouchableOpacity style={styles.outerButtonLook1} onPress={() => navigation.navigate('Delivery')}>
          <View style={styles.innerButtonContainer}>
            <MaterialCommunityIcons name='bike-fast' style={styles.innerButtonTextIcons} />
            <Text style={styles.innerButtonText}>Delivery</Text>
          </View>
          <MaterialCommunityIcons name='chevron-right' style={styles.innerButtonTextIcons} />
        </TouchableOpacity>

        <TouchableOpacity style={styles.outerButtonLook2} onPress={() => navigation.navigate('PickUp')}>
          <View style={styles.innerButtonContainer}>
            <MaterialCommunityIcons name='office-building-marker' style={styles.innerButtonTextIcons} />
            <Text style={styles.innerButtonText}>Pick Up</Text>
          </View>
          <MaterialCommunityIcons name='chevron-right' style={styles.innerButtonTextIcons} />
        </TouchableOpacity>
      </View>
    </SafeAreaView>
  )
}

const TransportNavigation = () => {
  const Stack = createStackNavigator();

  const screenOptions = {
    headerShown: false,
  };
  return (
    <NavigationContainer independent={true}>
      <Stack.Navigator initialRouteName='Home' screenOptions={screenOptions} >
        <Stack.Screen name="Home" component={HomeScreen} />
        <Stack.Screen name="Delivery" component={Delivery} options={{ headerShown: true }} />
        <Stack.Screen name="PickUp" component={PickUp} />
      </Stack.Navigator>
    </NavigationContainer>
  )
}

const styles = StyleSheet.create({
  mainContainer: {
    paddingTop: Platform.OS === "android" ? StatusBar.currentHeight : 0,
  },
  container: {
    flexDirection: 'row',
    justifyContent: 'center',
    alignItems: 'center'
  },
  title: {
    fontSize: 22,
    fontWeight: "600",
    marginHorizontal: 5,
    fontStyle: 'italic',
  },
  image: {
    width: 35,
    height: 35,
  },
  shadowProp: {
    shadowColor: '#171717',
    shadowOffset: { width: -4, height: 5 },
    shadowOpacity: 0.2,
    shadowRadius: 3,
  },
  imageContainer: {
    justifyContent: 'center',
    alignItems: 'center',
    marginVertical: 10,
  },
  comyFoodImage: {
    width: 405,
    height: Platform.OS === "android" ? 400 : 435,
    borderRadius: 10,
    opacity: 0.9,
  },
  outerButtonLook1: {
    backgroundColor: colors.Cerulean,
    marginHorizontal: 8,
    marginVertical: 10,
    height: 60,
    padding: 15,
    borderRadius: 10,
    alignItems: 'center',
    justifyContent: 'space-between',
    flexDirection: 'row'
  },
  outerButtonLook2: {
    backgroundColor: colors.Emerald,
    marginHorizontal: 8,
    marginVertical: 10,
    height: 60,
    padding: 15,
    borderRadius: 10,
    alignItems: 'center',
    justifyContent: 'space-between',
    flexDirection: 'row'
  },
  innerButtonContainer: {
    flexDirection: 'row',
    justifyContent: "space-between",
    alignItems: 'center',
  },
  innerButtonText: {
    fontSize: 22,
    color: colors.secondary,
    opacity: 0.8,
  },
  innerButtonTextIcons: {
    fontSize: 30,
    color: colors.secondary,
    opacity: 0.7,
    marginHorizontal: 5,
  },
})



export default TransportNavigation;