import { StyleSheet, Text, View } from 'react-native'
import React from 'react'

const OrderCompleted = ({ navigation }) => {
    return (
        <SafeAreaView style={styles.container}>
            <Text>OrderCompleted</Text>
        </SafeAreaView>
    )
}


const styles = StyleSheet.create({
    container: {
        flex: 1,
        justifyContent: "center",
        alignItems: "center",
        backgroundColor: "blue"
    },
})

export default OrderCompleted;