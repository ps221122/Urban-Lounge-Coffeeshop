import React, { useEffect } from "react";
import { useState } from "react";
import { View, Text, TouchableOpacity, Modal, StyleSheet, ScrollView, AsyncStorage } from "react-native";
import { useSelector } from "react-redux";
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import { Divider } from '@rneui/themed';
import { addItem } from '../../Service/ItemService';
import OrderItem from "./OrderItem";
import OrderCompleted from "../Payment/OrderCompleted";


const ViewCart = ({ navigation, route }) => {
    const [modalVisible, setModalVisible] = useState(false);

    const { items } = useSelector(
        (state) => state.cartReducer.selectedItems
    );

    const total = items
        .map((item) => Number(item.totalPrice.replace("€", "")))
        .reduce((prev, curr) => prev + curr, 0);

    const totalUSD = total.toLocaleString("nl", {
        style: "currency",
        currency: "EUR",
    });



    const addOrderToFirebase = () => {
        showDate();
        // addItem([
        //      date,
        //     items,
        // ]);
        // setModalVisible(false);
        navigation.navigate("OrderCompleted");
    };


    const [date, setDateTime] = useState('');
    const showDate = () => {

        //Get Current Date
        var date = new Date().getDate();

        //Get Current Month
        var month = new Date().getMonth() + 1;

        //Get Current Year
        var year = new Date().getFullYear();

        //Get Current Time Hours
        var hours = new Date().getHours();

        //Get Current Time Minutes
        var min = new Date().getMinutes();

        //Get Current Time Seconds
        var sec = new Date().getSeconds();

        var finalObject = date + '/' + month + '/' + year + ' ' + hours + ':' + min + ':' + sec;

        setDateTime(finalObject);

    }

    const checkoutModalContent = () => {
        return (
            <>
                <View style={styles.modalContainer}>
                    <View style={styles.modalCheckoutContainer}>
                        <View style={styles.modalHeader}>
                            <Text style={styles.modalHeaderTitle}>Check-Out</Text>
                            <Text style={styles.modalHeaderCloseButton} onPress={() => { setModalVisible(false); }}>X</Text>
                        </View>
                        <Divider />
                        <ScrollView>

                            {items.map((item, index) => (
                                <OrderItem key={index} item={item} />
                            ))}
                        </ScrollView>
                        <View style={styles.subtotalContainer}>
                            <Text style={styles.subtotalText}>Subtotal</Text>
                            <Divider />
                            <Text>{totalUSD}</Text>
                        </View>
                        <View style={styles.modalContainerInner}>
                            <TouchableOpacity onPress={() => { addOrderToFirebase(); }} style={styles.touchableModalView}>
                                <Text style={styles.CheckoutModalButton}>CheckOut</Text>
                                <Text style={styles.innerModalText}>
                                    {total ? totalUSD : ""}
                                </Text>
                            </TouchableOpacity>
                        </View>
                    </View>
                </View>
            </>
        );
    };


    return (
        <>
            <Modal animationType='fade'
                visible={modalVisible}
                transparent={true}
                onRequestClose={() => setModalVisible(false)}>
                {checkoutModalContent()}</Modal>
            {total ? (
                <View style={styles.outerView}>
                    <View style={styles.outerInnerView}>
                        <TouchableOpacity style={styles.touchableView} onPress={() => setModalVisible(true)}>
                            <Text style={styles.textFont}>ViewCart</Text>
                            <Text style={styles.textPriceFont}>{totalUSD}</Text>
                        </TouchableOpacity>
                    </View>
                </View>
            ) : (<></>)}
        </>
    )
}


const styles = StyleSheet.create({
    outerView: {
        flex: 1,
        alignItems: "center",
        justifyContent: 'center',
        flexDirection: "row",
        position: "absolute",
        bottom: 20,
        zIndex: 999,
    },
    outerInnerView: {
        flexDirection: "row",
        justifyContent: "center",
        width: "100%",
    },
    touchableView: {
        marginTop: 20,
        backgroundColor: "#404040",
        alignItems: "center",
        padding: 13,
        borderRadius: 30,
        flexDirection: "row",
        justifyContent: "center",
        width: 200,
        position: "relative",
    },
    textFont: {
        color: 'white',
        fontSize: 20,
        marginRight: 20,
    },
    textPriceFont: {
        color: '#CCFFFF',
        fontSize: 23,
        fontWeight: '300',
    },
    modalContainer: {
        flex: 1,
        justifyContent: "flex-end",
        backgroundColor: "rgba(0,0,0,0.7)",
    },

    modalCheckoutContainer: {
        backgroundColor: "white",
        padding: 16,
        height: 500,
        borderWidth: 1,
    },
    modalHeaderCloseButton: {
        fontSize: 25,
        color: 'red',
        fontWeight: '800',
    },
    modalHeaderTitle: {
        textAlign: "center",
        fontWeight: "600",
        fontSize: 18,
        marginBottom: 10,
    },

    subtotalContainer: {
        flexDirection: "row",
        justifyContent: "space-between",
        marginTop: 15,
    },

    subtotalText: {
        textAlign: "left",
        fontWeight: "600",
        fontSize: 15,
        marginBottom: 10,
    },
    modalContainerInner: {
        flexDirection: "row",
        justifyContent: "center"
    },
    touchableModalView: {
        marginTop: 20,
        backgroundColor: "black",
        alignItems: "flex-start",
        padding: 15,
        borderRadius: 30,
        width: 250,
        position: "relative",
    },
    CheckoutModalButton: {
        fontSize: 20,
        color: 'white',
    },
    innerModalText: {
        position: "absolute",
        right: 20,
        color: "white",
        fontSize: 20,
        top: 17,
    },
    modalHeader: {
        flexDirection: 'row',
        alignContent: 'space-between',
        justifyContent: 'space-between',
    },


})

export default ViewCart;