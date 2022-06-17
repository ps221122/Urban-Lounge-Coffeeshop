import React, { useState } from 'react';
import { SafeAreaView, StyleSheet, Text, View, TouchableOpacity, ScrollView, Platform, Switch, } from 'react-native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import { NavigationContainer } from '@react-navigation/native';
import { MaterialCommunityIcons } from '@expo/vector-icons';

const AccessoriesScreen = ({ navigation }) => {
  return (
    <ScrollView showsHorizontalScrollIndicator={false} showsVerticalScrollIndicator={false}>
      <View style={styles.container}>
        <TouchableOpacity>
          <View style={styles.outerButtonLook}>
            <Text style={styles.title}>Papers</Text>
            <MaterialCommunityIcons name='chevron-right' color={'gray'} size={30} />
          </View>
        </TouchableOpacity>

        <TouchableOpacity>
          <View style={styles.outerButtonLook}>
            <Text style={styles.title}>Cones</Text>
            <MaterialCommunityIcons name='chevron-right' color={'gray'} size={30} />
          </View>
        </TouchableOpacity>


        <TouchableOpacity>
          <View style={styles.outerButtonLook}>
            <Text style={styles.title}>Tips</Text>
            <MaterialCommunityIcons name='chevron-right' color={'gray'} size={30} />
          </View>
        </TouchableOpacity>

        <TouchableOpacity>
          <View style={styles.outerButtonLook}>
            <Text style={styles.title}>Raw Rolling Trays</Text>
            <MaterialCommunityIcons name='chevron-right' color={'gray'} size={30} />
          </View>
        </TouchableOpacity>

        <TouchableOpacity>
          <View style={styles.outerButtonLook}>
            <Text style={styles.title}>Gear</Text>
            <MaterialCommunityIcons name='chevron-right' color={'gray'} size={30} />
          </View>
        </TouchableOpacity>
      </View>
    </ScrollView>
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

export default AccessoriesScreen;