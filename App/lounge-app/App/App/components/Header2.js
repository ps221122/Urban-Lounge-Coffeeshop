import React from 'react';
import { SafeAreaView, StyleSheet, Text, View, StatusBar, Platform } from 'react-native';

const Header2 = ({ route }) => {
    const arr = [route.params.location];
    JSON.stringify(arr);
    console.log(arr);
    return (
        <SafeAreaView style={styles.mainContainer}>
            <View style={styles.headerLocation}>
                <View style={{ flexDirection: 'row' }}>
                    <Text style={styles.headerLocationText}>{arr}</Text>
                </View>
            </View>
        </SafeAreaView>
    )
}

const styles = StyleSheet.create({
    mainContainer: {
        paddingTop: Platform.OS === "android" ? StatusBar.currentHeight : 0,
    },
    headerLocation: {
        alignItems: 'center',
    },
    headerLocationText: {
        fontSize: 18,
        marginHorizontal: 15,
        fontWeight: '500',
    },
})
export default Header2;