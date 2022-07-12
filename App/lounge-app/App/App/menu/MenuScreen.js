import React, { useState } from 'react';
import { View, Platform, StyleSheet, StatusBar, Image, SafeAreaView, Text } from 'react-native';
import SearchTab from '../components/SearchTab';
import ViewCart from '../components/ViewCart';
import MenuNavigation from '../navigation/MenuNavigation';

const MenuScreen = ({ route, navigation }) => {
  const array = [route.params.arr];
  JSON.stringify(array);
  // console.log(array);
  return (
    <View style={{ flex: 1, }}>
      <SearchTab />
      <MenuNavigation />
      <ViewCart navigation={navigation} route={route} />
    </View>
  )
}


const styles = StyleSheet.create({})

export default MenuScreen;