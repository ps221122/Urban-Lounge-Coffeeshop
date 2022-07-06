import React, { useState, useEffect } from 'react';
import { StyleSheet, Text, TouchableOpacity, View, Platform, Image } from 'react-native';
import { auth } from '../../Config/dbUser';
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import { LinearGradient } from 'expo-linear-gradient';
import { Avatar } from '@rneui/themed';
import SignInScreen from "./SignInScreen";
import colors from '../../Config/colors';





const ProfileScreen = ({ navigation }) => {
    const handleSignOut = () => {
        auth
            .signOut()
            .then(() => {
                navigation.navigate("SignInScreen")
            })
            .catch(error => alert(error.message))
    }
    return (
        <LinearGradient colors={[colors.Azure, '#3b5998', '#192f6a']} style={styles.backgroundContainer}>
            <View style={styles.uploadBtnContainer}>
                <Avatar
                    rounded
                    size={250}
                    source={{
                        uri:
                            'https://cdn.pixabay.com/photo/2022/06/20/14/20/space-7273891_960_720.jpg',
                    }} />
                <View style={styles.profileContainer}>
                    <Text style={styles.emailText}>Email: {auth.currentUser?.email}</Text>
                    <TouchableOpacity
                        onPress={handleSignOut}
                        style={styles.button}
                    >
                        <Text style={styles.buttonText}>Sign out</Text>
                    </TouchableOpacity>
                </View>
            </View>
        </LinearGradient >
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
                <Stack.Screen name="ProfileScreen" component={ProfileScreen} />
                <Stack.Screen name="SignInScreen" component={SignInScreen} />
            </Stack.Navigator>
        </NavigationContainer>
    );
}


const styles = StyleSheet.create({
    backgroundContainer: {
        flex: 1,
        borderTopLeftRadius: 30,
        borderTopRightRadius: 30,
    },
    button: {
        backgroundColor: '#0782F9',
        width: 220,
        padding: 15,
        borderRadius: 10,
        alignItems: 'center',
        marginTop: 70,
    },
    buttonText: {
        color: 'white',
        fontWeight: '700',
        fontSize: 18,
    },
    uploadBtnContainer: {
        opacity: 0.8,
        justifyContent: 'center',
        marginVertical: 45,
        alignItems: 'center',
    },
    profileContainer: {
        justifyContent: 'center',
        alignItems: 'center',
        marginTop: 45,
    },
    emailText: {
        fontSize: 25,
        color: colors.secondary,
    },

})

export default Appy;