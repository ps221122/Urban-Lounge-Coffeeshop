import React, { useState } from 'react';
import { View, Platform, StyleSheet, StatusBar, Image, SafeAreaView, Text } from 'react-native';
import SearchTab from '../components/SearchTab';
import MenuNavigation from '../navigation/MenuNavigation';

const MenuScreen = () => {
  return (
    <View style={{flex:1,}}>
      <SearchTab />
      <MenuNavigation />
    </View>
  )
}


const styles = StyleSheet.create({})

export default MenuScreen;