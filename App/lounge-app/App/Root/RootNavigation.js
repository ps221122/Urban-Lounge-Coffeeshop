import React from 'react';
import { createStackNavigator } from '@react-navigation/stack';
import { NavigationContainer } from '@react-navigation/native';
import { Provider as ReduxProvider } from "react-redux";
import HomeScreen from '../App/HomeScreen';
import configureStore from "../Redux/Store";
import OrderCompleted from '../App/Payment/OrderCompleted';


const store = configureStore();



export default function RootNavigation() {
    const Stack = createStackNavigator();

    const screenOptions = {
        headerShown: false,
    };

    return (
        <ReduxProvider store={store}>
            <NavigationContainer independent={true}>
                <Stack.Navigator initialRouteName='Home' screenOptions={screenOptions}>
                    <Stack.Screen name="Home" component={HomeScreen} />
                    <Stack.Screen name='OrderCompleted' component={OrderCompleted} />
                </Stack.Navigator>
            </NavigationContainer>
        </ReduxProvider>
    )

}