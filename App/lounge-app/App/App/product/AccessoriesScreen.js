import React, { useState } from 'react';
import { SafeAreaView, StyleSheet, Text, View, TouchableOpacity, ScrollView, Platform, Switch, } from 'react-native';
import { createStackNavigator } from '@react-navigation/stack';
import { NavigationContainer } from '@react-navigation/native';
import { MaterialCommunityIcons } from '@expo/vector-icons';
import PaperScreen from '../product/accessoriesScreen/PaperScreen';
import ConesScreen from '../product/accessoriesScreen/ConesScreen';
import GearScreen from '../product/accessoriesScreen/GearScreen';
import TipsScreen from '../product/accessoriesScreen/TipsScreen';
import TraysScreen from '../product/accessoriesScreen/TraysScreen';





const AccessoriesScreen = ({ navigation }) => {
  return (
    <ScrollView showsHorizontalScrollIndicator={false} showsVerticalScrollIndicator={false}>
      <View style={styles.container}>
        <TouchableOpacity onPress={() => navigation.navigate('Paper')}>
          <View style={styles.outerButtonLook}>
            <Text style={styles.title}>Papers</Text>
            <MaterialCommunityIcons name='chevron-right' color={'gray'} size={30} />
          </View>
        </TouchableOpacity>

        <TouchableOpacity onPress={() => navigation.navigate('Cones')}>
          <View style={styles.outerButtonLook}>
            <Text style={styles.title}>Cones</Text>
            <MaterialCommunityIcons name='chevron-right' color={'gray'} size={30} />
          </View>
        </TouchableOpacity>


        <TouchableOpacity onPress={() => navigation.navigate('Tips')}>
          <View style={styles.outerButtonLook}>
            <Text style={styles.title}>Tips</Text>
            <MaterialCommunityIcons name='chevron-right' color={'gray'} size={30} />
          </View>
        </TouchableOpacity>

        <TouchableOpacity onPress={() => navigation.navigate('Trays')}>
          <View style={styles.outerButtonLook}>
            <Text style={styles.title}>Raw Rolling Trays</Text>
            <MaterialCommunityIcons name='chevron-right' color={'gray'} size={30} />
          </View>
        </TouchableOpacity>

        <TouchableOpacity onPress={() => navigation.navigate('Gear')}>
          <View style={styles.outerButtonLook}>
            <Text style={styles.title}>Gear</Text>
            <MaterialCommunityIcons name='chevron-right' color={'gray'} size={30} />
          </View>
        </TouchableOpacity>
      </View>
    </ScrollView>
  )
}

const Stack = createStackNavigator();

const AccessoriesNavigation = () => {
  const screenOptions = {
    headerShown: false,
  };
  return (
    <NavigationContainer independent={true}>
      <Stack.Navigator initialRouteName="Home" screenOptions={screenOptions}>
        <Stack.Screen name='AccessoriesScreen' component={AccessoriesScreen} />
        <Stack.Screen name='Paper' component={PaperScreen} />
        <Stack.Screen name='Cones' component={ConesScreen} />
        <Stack.Screen name='Gear' component={GearScreen} />
        <Stack.Screen name='Trays' component={TraysScreen} />
        <Stack.Screen name='Tips' component={TipsScreen} />
      </Stack.Navigator>
    </NavigationContainer>
  )
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'flex-start',
    alignItems: 'flex-start',
    marginLeft: 10,
    marginTop: 5,
  },
  outerButtonLook: {
    backgroundColor: "lightgray",
    alignItems: "center",
    padding: 13,
    borderRadius: 30,
    width: 400,
    height: 80,
    position: "relative",
    marginBottom: 30,
    marginTop: 15,
    flexDirection: 'row',
    justifyContent: 'space-between',
  },
  title: {
    fontSize: Platform.OS === 'android' ? 21 : 21,
    fontWeight: '500',
    padding: Platform.OS === 'android' ? 0 : 20,
  },
});

export default AccessoriesNavigation;