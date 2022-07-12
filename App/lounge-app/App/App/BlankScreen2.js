import React from 'react';
import { StyleSheet, Text, View, SafeAreaView } from 'react-native';
import MainNavigation from "../App/navigation/MainNavigation";
import Header2 from './components/Header2';



const BlankScreen2 = ({route}) => {
  return (
    <View style={styles.container}>
      <Header2 route={route} />
      <MainNavigation route={route} />
    </View>
  )
}


const styles = StyleSheet.create({
  container: {
    flex: 1,
  },
})
export default BlankScreen2;