import React from 'react';
import { SafeAreaView, StyleSheet, Text, View } from 'react-native';
import { Divider } from 'react-native-flex-layout';

const Header = ({ route }) => {
    const arr = [route.params.location];
    JSON.stringify(arr)
    return (
        <SafeAreaView>
            <View style={styles.headerLocation}>
                {arr.map((item, i) => (
                    <View style={{ flexDirection: 'row' }} key={i}>
                        <Text style={styles.headerLocationText}>{item.postCode}</Text>
                        <Text style={styles.headerLocationText}>,</Text>
                        <Text style={styles.headerLocationText}>{item.city}</Text>
                    </View>
                ))}
            </View>
        </SafeAreaView>
    )
}

const styles = StyleSheet.create({
    headerLocation: {
        alignItems: 'center',
    },
    headerLocationText: {
        fontSize: 18,
        marginHorizontal: 2,
        fontWeight: '500',
    },
})

export default Header;