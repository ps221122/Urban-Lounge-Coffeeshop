import React from 'react';
import { Text, View, StyleSheet } from 'react-native';
import SearchTab from "../components/SearchTab";
import ProductNavigation from '../navigation/ProductNavigation';

const BlankScreen = () => {
  return (
    <View>
      {/* <SearchTab /> */}
      <ProductNavigation/>
    </View>
  )
}


const styles = StyleSheet.create({

})


export default BlankScreen;