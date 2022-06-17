import React from 'react';
import { Platform, Text } from 'react-native';
import { NavigationContainer } from '@react-navigation/native';
import { createMaterialTopTabNavigator } from '@react-navigation/material-top-tabs';
import { MaterialCommunityIcons } from '@expo/vector-icons';
import WeedScreen from '../product/WeedScreen';
import HasjScreen from '../product/HasjScreen';
import AccessoriesScreen from '../product/AccessoriesScreen';




const Tab = createMaterialTopTabNavigator();



const ProductNavigation = () => {
    return (
        <Tab.Navigator initialRouteName='WeedScreen'
            screenOptions={{
                tabBarLabelStyle: { fontSize: Platform.OS === 'android' ? 15 : 15, },
                tabBarActiveTintColor: '#228B22',
                tabBarInactiveTintColor: 'black',
                tabBarBounces: true,
                tabBarShowLabel: true,
                tabBarStyle: {
                    marginTop: 41,
                    marginBottom: 0,
                },
            }}>

            <Tab.Screen name='WeedScreen' component={WeedScreen}
                options={{ tabBarLabel: "Weed" }} />

            <Tab.Screen name='HasjScreen' component={HasjScreen}
                options={{ tabBarLabel: "Hash", }} />

            <Tab.Screen name='AccessoriesScreen' component={AccessoriesScreen}
                options={{ tabBarLabel: "Accessories", }} />
        </Tab.Navigator>
        // <Text>hiiiiiiiiiiiiiiiiiiiiiiii</Text>
    )
}

const ProductNav = () => {
    return (
        <NavigationContainer independent={true}>
            <ProductNav />
        </NavigationContainer>
    )
}



export default ProductNavigation;