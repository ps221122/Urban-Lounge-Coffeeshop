import React, { useEffect, useRef } from "react";
import { View, Text, SafeAreaView, ScrollView, StyleSheet } from "react-native";
import { useSelector } from "react-redux";
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import LottieView from 'lottie-react-native';
import OrderCompletedItem from "../components/OrderCompletedItem";
import OnRoute from "./OnRoute";





const OrderCompleted = ({navigation}) => {
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


    const animation = useRef(null);
    setTimeout(() => {
        animation.current?.play();
    }, 2000);
   
    useEffect(() => {
        animation.current?.play();
    }, []);







    return (
        <SafeAreaView style={{ flex: 1, backgroundColor: "white" }}>
            <View
                style={{
                    margin: 15,
                    alignItems: "center",
                    height: "100%",
                }}>
                <LottieView
                    style={{ height: 100, alignSelf: "center", marginBottom: 30 }}
                    source={require("../assets/animation/check-mark.json")}
                    autoPlay={true}
                    loop={false}
                    ref={animation}
                    speed={0.5}
                />
                <Text style={{ fontSize: 20, fontWeight: "bold" }}>
                    Your order at Urban Lounge Coffeeshop has been placed with a total of : {totalUSD}
                </Text>
                <View>
                    <ScrollView showsHorizontalScrollIndicator={false} showsVerticalScrollIndicator={false}>
                        {items.map((item, index) => (
                            <OrderCompletedItem key={index} item={item} />
                        ))}
                        <LottieView
                            style={{ height: 100, alignSelf: "center", marginBottom: 30 }}
                            source={require("../assets/animation/cooking.json")}
                            autoPlay={true}
                            loop={true}
                            ref={animation}
                            speed={0.5}
                        />
                    </ScrollView>
                </View>
            </View>
        </SafeAreaView>
    )
}




const Stack = createNativeStackNavigator();
const screenOptions = {
    headerShown: false,
};

function Appy() {
    return (
        <NavigationContainer independent={true}>
            <Stack.Navigator screenOptions={screenOptions}>
                <Stack.Screen name="OrderCompleted" component={OrderCompleted} />
                <Stack.Screen name="OnRoute" component={OnRoute} />
            </Stack.Navigator>
        </NavigationContainer>
    );
}


const styles = StyleSheet.create({
    container: {
        flex: 1,
        justifyContent: "center",
        alignItems: 'center',
        backgroundColor: "purple",

    },
})


export default Appy;