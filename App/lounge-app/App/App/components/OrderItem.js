import React from 'react';
import { StyleSheet, Text, View, Alert, TouchableOpacity, TextInput } from 'react-native';
import colors from '../../Config/colors';


const OrderItem = ({ item }) => {
    var { name, price, inCart } = item;
    var priceNum = parseFloat(price.substring(1));
    var productPriceItem = priceNum * inCart;
    var subTotalPrice = "€" + productPriceItem.toFixed(2);

    // console.log(subTotalPrice);
    return (
        <View style={styles.orderView}>
            <Text style={styles.orderAmount}>{inCart}</Text>
            <Text style={styles.orderTextTitle}>{name}</Text>
            <Text style={styles.orderTextPrice}>{subTotalPrice}</Text>
        </View>
    )
}


const styles = StyleSheet.create({
    orderAmount: {
        color: colors.Cherry,
        fontSize: 15,
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