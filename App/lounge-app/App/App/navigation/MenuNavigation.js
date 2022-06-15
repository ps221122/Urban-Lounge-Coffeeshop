import React from 'react';
import { Platform, StyleSheet, Text } from 'react-native';
import { NavigationContainer } from '@react-navigation/native';
import { createMaterialTopTabNavigator } from '@react-navigation/material-top-tabs';
import { MaterialCommunityIcons } from '@expo/vector-icons';
import BreakfastScreen from '../menu/BreakfastScreen';
import PizzaScreen from '../menu/PizzaScreen';
import VeganScreen from '../menu/VeganScreen';
import PastaScreen from '../menu/PastaScreen';
import BeverageScreen from '../menu/BeverageScreen';
import AlcoholScreen from '../menu/AlcoholScreen';
import DinnerScreen from '../menu/DinnerScreen';
import DessertScreen from '../menu/DessertScreen';
import colors from '../../Config/colors';




const Tab = createMaterialTopTabNavigator();

const MenuNav = () => {
    return (
        <Tab.Navigator
            initialRouteName='BreakfastScreen'
            screenOptions={{
                // tabBarLabelStyle: { fontSize: Platform.OS === 'android' ? 8 : 8, },
                // tabBarItemStyle: { width: 45, },
                tabBarActiveTintColor: colors.Green,
                tabBarInactiveTintColor: 'black',
                tabBarBounces: true,
                tabBarShowLabel: false,
                tabBarStyle: {
                    marginTop: 41,
                },
            }}>
            <Tab.Screen name='BreakfastScreen' component={BreakfastScreen}
                options={{
                    tabBarLabel: "Brunch",
                    tabBarIcon: ({ color }) => (
                        <MaterialCommunityIcons name='coffee' color={color} size={25} />),
                }} />
            <Tab.Screen name='pizza' component={PizzaScreen} options={{
                tabBarLabel: "Pizza",
                tabBarIcon: ({ color }) => (
                    <MaterialCommunityIcons name='pizza' color={color} size={25} />),
            }} />
            <Tab.Screen name='VeganScreen' component={VeganScreen} options={{
                tabBarLabel: "Vegan",
                tabBarIcon: ({ color }) => (
                    <MaterialCommunityIcons name='leaf' color={color} size={25} />),
            }} />
            <Tab.Screen name='PastaScreen' component={PastaScreen} options={{
                tabBarLabel: "Pasta",
                tabBarIcon: ({ color }) => (
                    <MaterialCommunityIcons name='pasta' color={color} size={25} />),
            }} />
            <Tab.Screen name='BeverageScreen' component={BeverageScreen} options={{
                tabBarLabel: "Drinks",
                tabBarIcon: ({ color }) => (
                    <MaterialCommunityIcons name='beer' color={color} size={25} />),
            }} />
            <Tab.Screen name='AlcoholScreen' component={AlcoholScreen} options={{
                tabBarLabel: "Alcohol",
                tabBarIcon: ({ color }) => (
                    <MaterialCommunityIcons name='glass-mug-variant' color={color} size={25} />),
            }} />
            <Tab.Screen name='DinnerScreen' component={DinnerScreen} options={{
                tabBarLabel: "Dinner",
                tabBarIcon: ({ color }) => (
                    <MaterialCommunityIcons name='food-drumstick' color={color} size={25} />),
            }} />
            <Tab.Screen name='DessertScreen' component={DessertScreen} options={{
                tabBarLabel: "Dessert",
                tabBarIcon: ({ color }) => (
                    <MaterialCommunityIcons name='cupcake' color={color} size={25} />),
            }} />
        </Tab.Navigator>

    )
}





const MenuNavigation = () => {
    return (
        <NavigationContainer independent={true}>
            <MenuNav />
        </NavigationContainer>

    )
}

















const styles = StyleSheet.create({
    // itemButtonBackground: {
    //     marginTop: -17,
    //     backgroundColor: 'transparent',
    //     borderRadius: 0,
    //     width: 50,
    //     height: 55,
    //     flex: 1,
    // },
    // navButton: {
    //     alignItems: 'center',
    //     justifyContent: 'center',
    //     flex: 1,
    //     alignContent: 'center',
    // },
})



export default MenuNavigation;