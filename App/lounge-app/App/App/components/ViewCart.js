import React, { useEffect } from "react";
import { useState } from "react";
import { View, Text, TouchableOpacity, Modal, StyleSheet, ScrollView, AsyncStorage } from "react-native";
import { useSelector } from "react-redux";
import { Divider } from '@rneui/themed';
import { addItem } from '../../Service/ItemService';
import { createBottomTabNavigator } from '@react-navigation/bottom-tabs';
import OrderItem from "./OrderItem";
import LottieView from "lottie-react-native";
import CartScreen from "../Payment/CartScreen";




export default ViewCart = ({ navigation, props, route }) => {
    const arr = [route.params.arr];
    JSON.stringify(arr);

    const [modalVisible, setModalVisible] = useState(false);
    const [loading, setLoading] = useState(false);

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
        setLoading(true);
        addItem(
            [
                date,
                arr,
                items,
            ]
        )
        console.log(date);
        setTimeout(() => {
            setLoading(false);
        }, 2500);
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
                            <TouchableOpacity onPress={() => {
                                showDate();
                                addOrderToFirebase();
                                setModalVisible(false);
                            }} style={styles.touchableModalView}>{route.params.userOrderItemsInfo}
                                <Text style={styles.CheckoutModalButton}>Next</Text>
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
            <Modal animationType='slide'
                visible={modalVisible}
                transparent={true}
                onRequestClose={() => setModalVisible(false)}>
                {checkoutModalContent()}</Modal>
            {total ? (
                <View style={styles.outerView}>
                    <View style={styles.outerInnerView}>
                        <TouchableOpacity style={styles.touchableView} onPress={() => setModalVisible(true)}>
                            <Text style={styles.textFont}>Basket</Text>
                            <Text style={styles.textPriceFont}>{totalUSD}</Text>
                        </TouchableOpacity>
                    </View>
                </View>
            ) :
                (<></>)}

            {loading ? (
                <View
                    style={{
                        backgroundColor: "black",
                        position: "absolute",
                        opacity: 0.6,
                        justifyContent: "center",
                        alignItems: "center",
                        height: "100%",
                        width: "100%",
                    }}
                >
                    <LottieView
                        style={{ height: 200 }}
                        source={require("../assets/animation/scanner.json")}

                    />
                </View>
            ) : (
                <></>
            )}
        </>
    );
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
        fontSize: 18,
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
        backgroundColor: "rgba(0,0,0,0.9)",
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
        padding: 10,
        borderRadius: 30,
        width: 225,
        position: "relative",
    },
    CheckoutModalButton: {
        fontSize: 25,
        color: 'white',
    },
    innerModalText: {
        position: "absolute",
        right: 20,
        color: "white",
        fontSize: 25,
        top: 14,
    },
    modalHeader: {
        flexDirection: 'row',
        alignContent: 'space-between',
        justifyContent: 'space-between',
    },


})

