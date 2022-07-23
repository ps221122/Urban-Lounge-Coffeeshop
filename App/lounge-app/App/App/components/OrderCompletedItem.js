import { Divider } from '@rneui/themed';
import React from 'react';
import { StyleSheet, Text, View, Alert, TouchableOpacity, TextInput, Image } from 'react-native';
import colors from '../../Config/colors';

const OrderCompletedItem = ({ item }) => {
    var { name, totalPrice, inCart, description, tag, price } = item;
    var priceNum = parseFloat(price.substring(1));
    var productPriceItem = priceNum * inCart;
    var subTotalPrice = "€" + productPriceItem.toFixed(2);
    return (
        <View style={styles.orderView}>
            <View style={{ width: 245, justifyContent: 'space-evenly', }}>
                <>
                    <Text style={styles.title}>{name}</Text>
                    <Text style={styles.description}>{description}</Text>
                </>


                <View style={styles.timePriceContainer}>
                    <Text style={styles.orderTextPrice}>{subTotalPrice}</Text>
                </View>
            </View>
            <View>
                <Image source={{ uri: tag }} style={styles.image} />
            </View>

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
        padding: 5,
        marginVertical: 25,
        borderBottomWidth: 0.25,
        borderBottomColor: colors.Cerulean,
    },
    orderTextTitle: {
        fontWeight: '700',
        fontSize: 20,
        marginBottom: 10,
        color: colors.primary,
        fontStyle: 'normal',
    },
    orderTextPrice: {
        marginTop: 8,
        fontSize: 16,
        color: colors.primary,
    },

    timePriceContainer: {
        flexDirection: "row",
        marginTop: 8,
    },
    image: {
        width: Platform.OS === "android" ? 70 : 110,
        height: 130,
        borderRadius: 15,
        marginRight: 5,
        marginLeft: 5,
    },
    title: {
        fontSize: 22,
        marginBottom: 2,
        fontWeight: '700',
    },
    description: {
        fontSize: Platform.OS === "android" ? 12 : 13,
    },
})





export default OrderCompletedItem;