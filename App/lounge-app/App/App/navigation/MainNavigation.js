import React from 'react';
import { createBottomTabNavigator } from '@react-navigation/bottom-tabs';
import { MaterialCommunityIcons } from '@expo/vector-icons';
import { NavigationContainer } from '@react-navigation/native';
import MenuScreen from "../menu/MenuScreen";
import CartScreen from '../Payment/CartScreen';
import InfoScreen from '../Info/InfoScreen';
import SignInScreen from '../Users/SignInScreen';
import WeedScreen from '../product/WeedScreen';

const Tab = createBottomTabNavigator();

const TabMenu = () => {
  return (
    <Tab.Navigator
      screenOptions={{
        tabBarShowLabel: true,
        headerShown: false,
        tabBarActiveTintColor: 'red',
        tabBarInactiveTintColor: 'black',
        tabBarStyle: {
          borderTopWidth: 0,
          backgroundColor: "green",
          elevation: 0,
          borderRadius: 45,
        },


      }}
      initialRouteName="MenuScreen">
      <Tab.Screen name='Menu' component={MenuScreen}
        options={{
          tabBarIcon: ({ color }) => (
            <MaterialCommunityIcons name='silverware-fork-knife' color={color} size={30} />),
        }} />

      <Tab.Screen name='weed' component={WeedScreen}
        options={{
          tabBarIcon: ({ color }) => (
            <MaterialCommunityIcons name='cannabis' color={color} size={30} />),
        }} />

      <Tab.Screen name='CheckOut' component={CartScreen}
        options={{
          tabBarIcon: ({ color }) => (
            <MaterialCommunityIcons name='receipt' color={color} size={30} />),
        }} />



      <Tab.Screen name='Profiel' component={SignInScreen}
        options={{
          tabBarIcon: ({ color }) => (
            <MaterialCommunityIcons name='account' color={color} size={30} />),
        }} />


      <Tab.Screen name='More' component={InfoScreen}
        options={{
          tabBarIcon: ({ color }) => (
            <MaterialCommunityIcons name='dots-vertical' color={color} size={27} />),
        }} />

    </Tab.Navigator>
  );
}


const MainNavigation = () => {
  return (
    <NavigationContainer independent={true}>
      <TabMenu />
    </NavigationContainer>
  )
}



export default MainNavigation;