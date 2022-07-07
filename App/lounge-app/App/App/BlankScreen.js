import React from 'react';
import { StyleSheet, Text, View, SafeAreaView } from 'react-native';
import MainNavigation from "../App/navigation/MainNavigation";
import Header from './components/Header';




const BlankScreen = ({ route }) => {
    return (
        <View style={styles.container}>
            <Header route={route} />
            <MainNavigation />
        </View>
    )
}


const styles = StyleSheet.create({
    container: {
        flex: 1,
    },
})

export default BlankScreen;