import React from "react";
import { useState } from "react";
import { View, Text, TouchableOpacity, Modal, StyleSheet, ScrollView } from "react-native";
import { useSelector } from "react-redux";
import { Divider } from '@rneui/themed';
import OrderItem from "./OrderItem";


const ViewCart = ({ navigation }) => {
    const [modalVisible, setModalVisible] = useState(false);

    const { items } = useSelector(
        (state) => state.cartReducer.selectedItems
    );

    const total = items
        .map((item) => Number(item.price.replace("€", "")))
        .reduce((prev, curr) => prev + curr, 0);

    const totalUSD = total.toLocaleString("nl", {
        style: "currency",
        currency: "EUR",
    });


    const addOrderToFirebase = () => {
        // const db = firebase.firestore();
        // db.collection("orders")
        //     .add({
        //         items: items,
        //         createdAt: firebase.firestore.FieldValue.serverTimestamp(),
        //     })
        // setModalVisible(false);
        // console.log("hi how are you doing");
    };

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
        fontSize: 20,
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