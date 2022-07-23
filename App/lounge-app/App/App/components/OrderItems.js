import React from 'react';
import { StyleSheet, Text, View, Alert, TouchableOpacity, TextInput } from 'react-native';
import colors from '../../Config/colors';


const OrderItems = ({ item }) => {
    var { name, price, inCart } = item;
    var priceNum = parseFloat(price.substring(1));
    var productPriceItem = priceNum * inCart;
    var subTotalPrice = "€" + productPriceItem.toFixed(2);

    // console.log(subTotalPrice);
    return (
        <View style={styles.orderView}>
            <Text style={styles.orderAmount}>{inCart})</Text>
            <Text style={styles.orderTextTitle}>{name}</Text>
            <Text style={styles.orderTextPrice}>{subTotalPrice}</Text>
        </View>
    )
}


const styles = StyleSheet.create({
    orderAmount: {
        color: colors.primary,
        fontSize: 12,
    },
    orderView: {
        flexDirection: "row",
        justifyContent: "space-between",
        padding: 5,
    },
    orderTextTitle: {
        fontWeight: '300',
        fontSize: 16,
        color: colors.primary,
        fontStyle: 'normal',
    },
    orderTextPrice: {
        fontWeight: '600',
        fontSize: 16,
        color: colors.CobaltBlue,

    },
    orderImage: {
        width: 75,
        height: 75,
    },
})
export default OrderItems;