import React from 'react';
import { StyleSheet, Text, View, Alert, TouchableOpacity, TextInput } from 'react-native';

const OrderItem = ({ item }) => {
    const { name, price, incart } = item;
    return (
        <View style={styles.orderView}>
            <Text style={styles.orderTextTitle}>{name}</Text>
            <Text style={styles.orderTextPrice}>{price}</Text>
        </View>
    )
}


const styles = StyleSheet.create({
    orderAmount: {
        borderColor: 'gray',
        backgroundColor: 'gray',
        borderRadius: 15,
        borderWidth: 1,
        width: 20,
        alignItems: 'center',
        height: 20,
    },
    orderView: {
        flexDirection: "row",
        justifyContent: "space-between",
        padding: 15,
        borderBottomWidth: 1,
        borderBottomColor: "#999",
    },
    orderTextTitle: {
        fontWeight: '400',
        fontSize: 16,
        color: 'black',
        fontStyle: 'italic',
    },
    orderTextPrice: {
        fontWeight: '600',
        fontSize: 16,
        color: 'forestgreen',

    },
    orderImage: {
        width: 75,
        height: 75,
    },
})
export default OrderItem;