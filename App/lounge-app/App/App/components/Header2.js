import React from 'react';
import { StyleSheet, Text, View, SafeAreaView } from 'react-native';

const Header2 = ({ route }) => {
    const infoArr = [route.params.infoUser];
    return (
        <SafeAreaView style={styles.mainContainer}>
            <View style={styles.headerLocation}>
                <View style={{ flexDirection: 'row' }}>
                    <Text style={styles.headerLocationText}>{infoArr}</Text>
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
        // letterSpacing:12,
        fontWeight: '500',
    },
})
export default Header2;