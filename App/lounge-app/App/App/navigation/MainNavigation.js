import React from 'react';
import { createBottomTabNavigator } from '@react-navigation/bottom-tabs';
import { MaterialCommunityIcons } from '@expo/vector-icons';
import { NavigationContainer } from '@react-navigation/native';
import MenuScreen from "../menu/MenuScreen";
import CartScreen from '../Payment/CartScreen';
import InfoScreen from '../Info/InfoScreen';
import SignInScreen from '../Users/SignInScreen';
import colors from '../../Config/colors';



const Tab = createBottomTabNavigator();


const TabMenu = ({ route }) => {
  const arr = [route.params.location];
  JSON.stringify(arr);
  return (
    <Tab.Navigator
      screenOptions={{
        tabBarShowLabel: false,
        headerShown: false,
        tabBarActiveTintColor: colors.secondary,
        tabBarInactiveTintColor: 'black',
        tabBarStyle: {
          backgroundColor: "#669999",
        },
      }}
      initialRouteName="MenuScreen">

      <Tab.Screen name='Menu' component={MenuScreen} initialParams={{ arr, }}
        options={{
          tabBarIcon: ({ color }) => (
            <MaterialCommunityIcons name='silverware-fork-knife' color={color} size={30} />),
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


const MainNavigation = ({ route }) => {
  const arr = [route.params.location];
  JSON.stringify(arr);

  return (
    <NavigationContainer independent={true}>
      <TabMenu route={route} />
    </NavigationContainer>
  )
}



export default MainNavigation;