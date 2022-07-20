import React from 'react';
import { StyleSheet, Text, View } from 'react-native';

const CartScreen = ({ route }) => {
  // const arr = [route.params.userOrderItemsInfo];
  // JSON.stringify(arr);
  // console.log(arr);
  return (
    <View style={styles.container}>
      <Text>CartScreen</Text>
    </View>
  )
}


const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: "center",
    alignItems: 'center',
    backgroundColor: "purple",
 
  },
})
export default CartScreen;