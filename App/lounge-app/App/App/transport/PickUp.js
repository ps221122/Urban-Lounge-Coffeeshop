import React, { useState } from 'react';
import { StyleSheet, Text, View, TouchableOpacity, ScrollView, SafeAreaView } from 'react-native';
import { Divider } from '@react-native-material/core';
import { MaterialCommunityIcons } from '@expo/vector-icons';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import { NavigationContainer } from '@react-navigation/native';
import colors from '../../Config/colors';
import BlankScreen from '../BlankScreen';



const restaurantLocation = [
  {
    street: "Ruwe Putten 30",
    city: 'Neunen',
    province: 'Eindhoven',
    postCode: '5674 SL',
  },
  {
    street: 'Barnflair West 162',
    city: 'Ter Apel',
    province: 'Groningen',
    postCode: '9561 NE',
  },
  {
    street: 'Rotterdamseweg 134',
    city: 'Zwijndrecht',
    province: 'Zuid-Holland',
    postCode: '3332 AK',
  },
  {
    street: 'Amundsenweg 154',
    city: 'Venlo',
    province: 'Limburg',
    postCode: '5928 LT',
  },
  {
    street: "Kleine Buren 104",
    city: 'Grou',
    province: 'Friesland',
    postCode: '9001 AV',
  },
  {
    street: " Betje Wolfflaan 99",
    city: 'Hilversum',
    province: 'Noord-Holland',
    postCode: '1215 HV',
  },
  {
    street: "Linde 51",
    city: 'Sittard',
    province: 'Limburg',
    postCode: '6131 GG',
  },
  {
    street: "Acaciastraat 55",
    city: 'Den Haag',
    province: 'Zuid-Holland',
    postCode: '2565 KJ',
  },
  {
    street: "Korstmos 51",
    city: 'Deurne',
    province: 'Noord-Brabant',
    postCode: '5754 GJ',
  },
  {
    street: "Adelaarweg 147",
    city: 'Dedemsvaart',
    province: 'Overijssel',
    postCode: '7701 KK',
  },
  {
    street: "Dorpsstraat 129",
    city: 'Bronneger',
    province: 'Drenthe',
    postCode: '9527 TC',
  },
  {
    street: "Tweelingenlaan 17",
    city: 'Apeldoorn',
    province: 'Gelderland',
    postCode: '7324 AT',
  },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },
  // {
  //   street: "",
  //   city: '',
  //   province: '',
  //   postCode: '',
  // },



]


const PickUp = ({ navigation }) => {
  return (
    <SafeAreaView>
      <ScrollView showsHorizontalScrollIndicator={false} showsVerticalScrollIndicator={false}>
        {restaurantLocation.map((location, index) => (
          <TouchableOpacity key={index} onPress={() =>navigation.navigate("BlankScreen", {
           location,
          })}>
            <Divider />
            <LocationInfo location={location} />
          </TouchableOpacity>
        ))}
      </ScrollView>
    </SafeAreaView>
  )
}

const LocationInfo = (props) => (
  <View style={styles.outerLocationView}>
    <View style={{ flexDirection: 'row', alignItems: 'center' }}>
      <MaterialCommunityIcons name='map-marker-multiple' size={30} color={colors.BabyBlue} />
      <View>
        <View style={{ flexDirection: 'row', paddingLeft: 15, }}>
          <Text style={styles.locationTitle}>{props.location.province}</Text>
          <Text style={styles.locationTitle}>,</Text>
          <Text style={styles.locationTitle}>{props.location.city}</Text>
        </View>
        <View style={{ flexDirection: 'row', paddingLeft: 15, }}>
          <Text>{props.location.street}</Text>
          <Text>,</Text>
          <Text>{props.location.postCode}</Text>
          <Text>,</Text>
          <Text>{props.location.province}</Text>
          <Text>,</Text>
          <Text>NL</Text>
        </View>
      </View>
    </View>
    <View>
      <MaterialCommunityIcons name='chevron-right' size={30} color={colors.Silver} />
    </View>
  </View >
)


const Stack = createNativeStackNavigator();
const screenOptions = {
  headerShown: false,
};

function Transport() {
  return (
    <NavigationContainer independent={true}>
      <Stack.Navigator initialRouteName="Home" screenOptions={screenOptions}>
        <Stack.Screen name="PickUp" component={PickUp} options={{ headerShown: true }} />
        <Stack.Screen name="BlankScreen" component={BlankScreen} options={{ headerShown: false }} />
      </Stack.Navigator>
    </NavigationContainer>
  )
}

const styles = StyleSheet.create({
  outerLocationView: {
    flexDirection: 'row',
    marginHorizontal: 10,
    marginVertical: 15,
    justifyContent: 'space-between',
    alignItems: 'center',
  },
  locationTitle: {
    fontSize: 20,
    fontWeight: '500',
    marginHorizontal: 2,
  },
  headerBackButtonBar: {
    // marginVertical: 8,
    // alignSelf: 'center',
    // alignContent: 'center',
    alignItems: 'center',
    // justifyContent:'center',
  },
  headerBar: {
    borderBottomWidth: 0,
    shadowColor: '#000',
    shadowOpacity: 0.25,
    shadowRadius: 20,
    shadowOffset: { width: 0, height: 0 },
    alignItems: "center",
    marginVertical: 8,
    marginHorizontal: 15,
  },
  headerBarText: {
    fontWeight: '600',
    fontSize: 25,
    fontStyle: 'italic',
  },
})



export default Transport;