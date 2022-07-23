import React, { useState } from 'react';
import { SafeAreaView, StyleSheet, Text, TextInput, TouchableOpacity, View, Modal, ScrollView } from 'react-native';
import { MaterialCommunityIcons } from '@expo/vector-icons';
import { useSelector } from "react-redux";
import { Divider } from '@rneui/themed';
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import colors from '../../Config/colors';
import OrderItems from '../components/OrderItems';
import OrderCompleted from "../Payment/OrderCompleted";










const CartScreen = ({navigation}) => {
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

  return (
    <SafeAreaView>

      {total ? (
        <>
          <View style={[styles.outerVoucherView, styles.shadowProp]}>
            <View>
              <Text style={styles.voucherTitle}>Add a Voucher</Text>
            </View>
            <View style={styles.innerVoucherView}>
              <TextInput placeholderTextColor={'gray'} style={styles.voucherInput} placeholder='Enter Voucher Code...' />
              <TouchableOpacity style={styles.applyButton}>
                <Text style={styles.applyButtonText}>Apply</Text>
              </TouchableOpacity>
            </View>
          </View>

          <View style={styles.outerDetailView}>
            <View style={styles.shadowProp}>
              <View>
                <Text style={styles.title}>Order Details</Text>
                <Divider />
              </View>

              <View style={{ marginVertical: 45, }}>
                <ScrollView showsHorizontalScrollIndicator={false} showsVerticalScrollIndicator={false}>
                  {items.map((item, index) => (
                    <OrderItems key={index} item={item} />
                  ))}
                </ScrollView>
              </View>

              <View style={styles.totalView}>
                <Text style={styles.totalPriceAmount}>Total:</Text>
                <Text style={styles.totalPriceAmount}>{totalUSD}</Text>
              </View>

            </View>
          </View>

        </>
      ) :

        (<>
          <View style={[styles.outerVoucherView, styles.shadowProp]}>
            <View>
              <Text style={styles.voucherTitle}>Add a Voucher</Text>
            </View>
            <View style={styles.innerVoucherView}>
              <TextInput placeholderTextColor={'gray'} style={styles.voucherInput} placeholder='Enter Voucher Code...' />
              <TouchableOpacity style={styles.applyButton}>
                <Text style={styles.applyButtonText}>Apply</Text>
              </TouchableOpacity>
            </View>
          </View>

          <View style={styles.outerDetailView}>
            <View style={styles.shadowProp}>
              <View>
                <Text style={styles.title}>Order Details</Text>
                <Divider />
              </View>

              <View style={{ marginVertical: 50, alignItems: 'center' }}>
                <ScrollView showsHorizontalScrollIndicator={false} showsVerticalScrollIndicator={false}>
                  <Text>Add some items from the menu to get started!</Text>
                </ScrollView>
              </View>

              <View style={styles.totalView}>
                <Text style={styles.totalPriceAmount}>Total:</Text>
                <Text style={styles.totalPriceAmount}>€0.00</Text>
              </View>

            </View>
          </View>

        </>)
      }










      {total ? (<View>
        <TouchableOpacity style={styles.checkoutButton} onPress={()=>navigation.navigate("OrderCompleted")}>
          <Text style={styles.checkoutButtonText}>CheckOut</Text>
        </TouchableOpacity>
      </View>)
        : (<></>)
      }
    </SafeAreaView >
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
        <Stack.Screen name="CartScreen" component={CartScreen} />
        <Stack.Screen name="OrderCompleted" component={OrderCompleted} />
      </Stack.Navigator>
    </NavigationContainer>
  );
}





const styles = StyleSheet.create({
  outerVoucherView: {
    backgroundColor: 'white',
    borderRadius: 10,
    margin: 10,
    height: 100,
    padding: 15,
  },
  innerVoucherView: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    marginTop: 10,
    alignContent: 'center'
  },
  voucherTitle: {
    fontWeight: '500',
    fontSize: 23,
  },
  title: {
    fontWeight: '500',
    fontSize: 23,
  },
  voucherInput: {
    borderColor: 'gray',
    borderRadius: 8,
    borderWidth: 1,
    height: 35,
    color: 'gray',
    fontSize: 18,
    width: 250,
    padding: 2,
  },
  applyButton: {
    backgroundColor: '#1E90FF',
    width: 90,
    borderRadius: 15,
    padding: 8,
    paddingLeft: 20,

  },
  applyButtonText: {
    color: 'white',
    fontSize: 20,
  },
  outerDetailView: {
    backgroundColor: 'white',
    borderRadius: 10,
    marginVertical: 15,
    padding: 10,
    marginHorizontal: 10,

  },
  checkoutButton: {
    backgroundColor: colors.primary,
    borderRadius: 15,
    height: 40,
    marginVertical: 55,
    marginHorizontal: 20,
  },
  checkoutButtonText: {
    textAlign: 'center',
    fontSize: 26,
    paddingVertical: 5,
    color: colors.secondary
  },
  totalView: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    marginVertical: 35,
  },
  totalPriceAmount: {
    fontWeight: '600',
    fontSize: 18,
  },
  shadowProp: {
    shadowColor: '#171717',
    shadowOffset: { width: -2, height: 5 },
    shadowOpacity: 0.2,
    shadowRadius: 3,
  },
})


export default Appy;