import React from 'react';
import { StyleSheet, Text, View } from 'react-native';

const BlankScreen = ({ route }) => {
    const arr = [route.params.location];
    JSON.stringify(arr);
    console.log();
    return (
        <View style={styles.container}>
            {arr.map((item, i) => (
                <Text key={i}>{item.postCode}</Text>
            ))}
        </View>
    )
}


const styles = StyleSheet.create({
    container: {
        flex: 1,
        alignItems: 'center',
        padding: 20,
        justifyContent: 'center',
    },
})

export default BlankScreen;