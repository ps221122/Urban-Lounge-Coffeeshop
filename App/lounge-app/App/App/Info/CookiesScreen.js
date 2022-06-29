import React, { useState } from 'react';
import { StyleSheet, Text, View, ScrollView, TouchableOpacity, Switch } from 'react-native';
import { Appearance } from 'react-native';
import { MaterialCommunityIcons } from '@expo/vector-icons';
import { Divider } from 'react-native-flex-layout';




const CookiesScreen = () => {
  const [isEnabled, setIsEnabled] = useState(false);
  const toggleSwitch = () => setIsEnabled(previousState => !previousState);

  return (
    <ScrollView showsHorizontalScrollIndicator={false} showsVerticalScrollIndicator={false}>
      <Divider/>
      <View style={styles.shadowProp}>

        <View>
          <>
            <Text style={styles.containerTitle1}>preferences menu</Text>
          </>

          <Text style={styles.containerText}>
            When you open an app, information may be stored on or retrieved from your device, primarily in the form of SDKs. This information may be about you, your preference or your device and is primarily used to make the app work properly. The information does not normally identify you directly, but may provide you with a more personalized user experience. Because we respect your right to privacy, you can choose to block some types of SDKs. Click on the names for different categories for more information and to change our default settings. however, please be aware that blocking some types of SDKs may adversely affect your experience of the app and the services we offer.
          </Text>
        </View>
        <View style={{ flexDirection: 'row', justifyContent: 'center', alignContent: 'space-evenly' }}>
          <TouchableOpacity style={styles.containerButton}>
            <Text style={{ color: 'white', fontSize: 18, marginVertical: 10, }}>Allow all</Text>
          </TouchableOpacity>

          <TouchableOpacity style={styles.containerButton}>
            <Text style={{ color: 'white', fontSize: 18, marginVertical: 10, }}>Reject all</Text>
          </TouchableOpacity>
        </View>

        <Divider />

        <><Text style={styles.containerTitle2}>Manage cookie preferences</Text></>
        <Divider />


        <View style={styles.containerItems}>
          <Text style={styles.textContainerItems}>Performance Cookies</Text>
          <View style={{ flexDirection: 'row' }}>
            <Switch
              trackColor={{ false: "#767577", true: "#009900" }}
              thumbColor={isEnabled ? "white" : "#f4f3f4"}
              ios_backgroundColor="#767577"
              onValueChange={toggleSwitch}
              value={isEnabled} />
            <TouchableOpacity>
              <MaterialCommunityIcons name='chevron-right' color={'gray'} size={30} />
            </TouchableOpacity>
          </View>
        </View>


        <Divider />

        {/* <View style={styles.containerItems}>
          <Text style={styles.textContainerItems}>functionality cookies</Text>
          <View style={{ flexDirection: 'row' }}>
            <Switch
              trackColor={{ false: "#767577", true: "#009900" }}
              thumbColor={isEnabled ? "white" : "#f4f3f4"}
              ios_backgroundColor="#767577"
              onValueChange={toggleSwitch}
              value={isEnabled} />
            <TouchableOpacity>
              <MaterialCommunityIcons name='chevron-right' color={'gray'} size={30} />
            </TouchableOpacity>
          </View>
        </View>
        <Divider orientation="center" style={{ marginTop: 10, borderBottomWidth: 1, borderBottomColor: 'lightgray', borderRadius: 50, }} />
        <View style={styles.containerItems}>
          <Text style={styles.textContainerItems}>Analytic Cookies</Text>
          <View style={{ flexDirection: 'row' }}>
            <Switch
              trackColor={{ false: "#767577", true: "#009900" }}
              thumbColor={isEnabled ? "white" : "#f4f3f4"}
              ios_backgroundColor="#767577"
              onValueChange={toggleSwitch}
              value={isEnabled} />
            <TouchableOpacity>
              <MaterialCommunityIcons name='chevron-right' color={'gray'} size={30} />
            </TouchableOpacity>
          </View>
        </View>
        <Divider orientation="center" style={{ marginTop: 10, borderBottomWidth: 1, borderBottomColor: 'lightgray', borderRadius: 50, }} />
        <View style={styles.containerItems}>
          <Text style={styles.textContainerItems}>Advertise & Social Media Cookies</Text>
          <View style={{ flexDirection: 'row' }}>
            <Switch
              trackColor={{ false: "#767577", true: "#009900" }}
              thumbColor={isEnabled ? "white" : "#f4f3f4"}
              ios_backgroundColor="#767577"
              onValueChange={toggleSwitch}
              value={isEnabled}/>
            <TouchableOpacity>
              <MaterialCommunityIcons name='chevron-right' color={'gray'} size={30} />
            </TouchableOpacity>
          </View>
        </View>
        <Divider orientation="center" style={{ marginTop: 10, borderBottomWidth: 1, borderBottomColor: 'lightgray', borderRadius: 50, }} />
 */}

        <TouchableOpacity style={styles.containerConfirmButton}>
          <Text style={{ color: 'white', fontSize: 20, marginVertical: 10, }}>Confirm My Choices</Text>
        </TouchableOpacity>


      </View>
    </ScrollView >
  )
}


const styles = StyleSheet.create({
  containerTitle1: {
    fontSize: 25,
    fontWeight: '600',
    fontStyle: "italic",
    marginVertical: 20,
    marginHorizontal: 100,
  },
  containerTitle2: {
    fontSize: 25,
    fontWeight: '600',
    fontStyle: "italic",
    marginVertical: 20,
    marginHorizontal: 45,
  },
  containerText: {
    marginHorizontal: 15,
    marginVertical: 15,
  },
  containerButton: {
    backgroundColor: '#0033CC',
    width: 100,
    height: 40,
    alignSelf: 'center',
    alignItems: 'center',
    alignContent: 'center',
    borderRadius: 25,
    marginHorizontal: 15,
  },
  containerItems: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    alignContent: 'center',
    marginVertical: 5,
    marginHorizontal: 5,
    alignItems: 'center',
  },
  textContainerItems: {
    fontSize: 24,
    fontFamily: "Cochin",
  },
  containerConfirmButton: {
    backgroundColor: '#0033CC',
    width: 250,
    height: 40,
    alignSelf: 'center',
    alignItems: 'center',
    alignContent: 'center',
    borderRadius: 15,
    marginHorizontal: 25,
    marginVertical: 25,
  },
  shadowProp: {
    shadowColor: '#171717',
    shadowOffset: { width: -2, height: 5 },
    shadowOpacity: 0.2,
    shadowRadius: 3,
  },

})

export default CookiesScreen;