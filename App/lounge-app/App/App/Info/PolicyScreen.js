import React from 'react';
import { ScrollView, StyleSheet, Text, View, TouchableOpacity } from 'react-native';
import { MaterialCommunityIcons } from '@expo/vector-icons';

const PolicyScreen = () => {
  return (
    <View style={styles.container}>
      <>
        <Text style={styles.containerTitle}>Privacy policy</Text>
        <Text style={{ fontStyle: 'italic', fontSize: 14, }}>Overview of how we use your data</Text>
        <ScrollView style={{ marginHorizontal: 5, }} showsHorizontalScrollIndicator={false} showsVerticalScrollIndicator={false} alwaysBounceHorizontal={false} alwaysBounceVertical={false} bounces={false} centerContent={true}>

          <View style={styles.textContainer}>
            <View style={{ flexDirection: 'row', }}>
              <MaterialCommunityIcons name='circle-small' color={'black'} size={25} />
              <Text style={{ marginTop: 5, }}>This Privacy Statement describes how we, StonksPizza Netherlands B.V., (also referred to as "StonksPizza" or "us") collect, use, protect and share customers' personal data.</Text>
            </View>
          </View>


          <View style={styles.textContainer}>
            <View style={{ flexDirection: 'row', }}>
              <MaterialCommunityIcons name='circle-small' color={'black'} size={25} />
              <Text style={{ marginTop: 5, }}>StonksPizza which operates the websites, mobile applications and social media activities (“online services”) is the data controller for your information.</Text>
            </View>
          </View>


          <View style={styles.textContainer}>
            <View style={{ flexDirection: 'row', }}>
              <MaterialCommunityIcons name='circle-small' color={'black'} size={25} />
              <Text style={{ marginTop: 5, }}>StonksPizza collects and processes your personal data when you use our online services, when you place an order by telephone or at a StonksPizza store (please note: some stores may be owned by our independent franchisees), or when you communicate with us in any other way.</Text>
            </View>
          </View>


          <View style={styles.textContainer}>
            <View style={{ flexDirection: 'row', }}>
              <MaterialCommunityIcons name='circle-small' color={'black'} size={25} />
              <Text style={{ marginTop: 5, }}>StonksPizza mainly uses your personal data:</Text>
            </View>
            <View style={{ marginHorizontal: 15, }}>

              <>
                <View style={{ flexDirection: 'row', }}>
                  <MaterialCommunityIcons name='numeric-1' color={'red'} size={20} />
                  <Text style={{ marginTop: 0, }}>to process your orders;</Text>
                </View>
              </>

              <>
                <View style={{ flexDirection: 'row', }}>
                  <MaterialCommunityIcons name='numeric-2' color={'red'} size={20} />
                  <Text style={{ marginTop: 0, }}>to provide online services including customer accounts;</Text>
                </View>
              </>

              <>
                <View style={{ flexDirection: 'row', }}>
                  <MaterialCommunityIcons name='numeric-3' color={'red'} size={20} />
                  <Text style={{ marginTop: 0, }}>for customer relationship management: answering questions, processing claims, collecting feedback, collecting information about new products, offers and services and communicating offers and promotions;</Text>
                </View>
              </>

              <>
                <View style={{ flexDirection: 'row', }}>
                  <MaterialCommunityIcons name='numeric-4' color={'red'} size={20} />
                  <Text style={{ marginTop: 0, }}>to provide personalized advertisements;</Text>
                </View>
              </>

              <>
                <View style={{ flexDirection: 'row', }}>
                  <MaterialCommunityIcons name='numeric-5' color={'red'} size={20} />
                  <Text style={{ marginTop: 0, }}> and to also perform analyses.</Text>
                </View>
              </>
            </View>
          </View>

          <View style={styles.textContainer}>
            <View style={{ flexDirection: 'row', }}>
              <MaterialCommunityIcons name='circle-small' color={'black'} size={25} />
              <Text style={{ marginTop: 5, }}>Personal data is shared with (i) our parent company and the StonksPizza group of companies, (ii) our independent franchisees and our own stores involved in processing your orders and (iii) our service providers.</Text>
            </View>
          </View>


          <View style={styles.textContainer}>
            <View style={{ flexDirection: 'row', }}>
              <MaterialCommunityIcons name='circle-small' color={'black'} size={25} />
              <Text style={{ marginTop: 5, }}>Personal data may, among other things, be transferred to Australia where our parent company is headquartered.</Text>
            </View>
          </View>


          <View style={styles.textContainer}>
            <View style={{ flexDirection: 'row', }}>
              <MaterialCommunityIcons name='circle-small' color={'black'} size={25} />
              <Text style={{ marginTop: 5, }}>If we need your consent, for example when placing cookies or similar technologies, you can withdraw your consent at any time.</Text>
            </View>
          </View>


          <View style={styles.textContainer}>
            <View style={{ flexDirection: 'row', }}>
              <MaterialCommunityIcons name='circle-small' color={'black'} size={25} />
              <Text style={{ marginTop: 5, }}>This Privacy Statement provides more information about the processing of your personal data and your rights in this regard, including the right to object to certain elements of the processing carried out by StonksPizza. You will find more information about your rights and how to exercise them in "What rights do I have?".</Text>
            </View>
          </View>


          <View style={styles.textContainer}>
            <View style={{ flexDirection: 'row', }}>
              <MaterialCommunityIcons name='circle-small' color={'black'} size={25} />
              <Text style={{ marginTop: 5, }}>What does this statement not cover?</Text>
            </View>
            <Text>Many of our stores are operated by franchisees. These franchisees are independent entrepreneurs and therefore also independently responsible for processing your personal data. This Privacy Statement does not apply to our franchisees as each franchisee is responsible for compliance with privacy laws. For more information about their privacy and data protection practices, including with regard to personal data provided by telephone and/or in-store, please refer to the respective franchisee's privacy statement, which will be displayed in-store.</Text>
          </View>
        </ScrollView>
        <TouchableOpacity style={{ flexDirection: 'row', marginVertical: 15, }} onPress={() => console.log("needs to navigate to website")} >
          <Text style={{ fontSize: 20, fontWeight: '600', color: "#0099ff" }}>Want to learn more</Text>
          <MaterialCommunityIcons name='arrow-right-thick' color={'black'} size={22} />
        </TouchableOpacity>
      </>
    </View >
  )
}


const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'flex-start',
    alignItems: 'center',
  },
  containerTitle: {
    fontSize: 25,
    textDecorationLine: 'underline',
    textDecorationStyle: 'double',
    textDecorationColor: 'gray',
    fontWeight: "700",
    marginLeft: 25,
    marginTop: 45,
    marginBottom: 15,
    fontStyle: 'italic',

  },
  textContainer: {
    marginVertical: 10,
  },
})



export default PolicyScreen;