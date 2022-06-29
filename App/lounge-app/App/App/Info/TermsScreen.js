import React from 'react';
import { ScrollView, StyleSheet, Text, View, TouchableOpacity } from 'react-native';
import { MaterialCommunityIcons } from '@expo/vector-icons';

const TermsScreen = () => {
  return (
    <View style={styles.container}>
      <>
        <Text style={styles.containerTitle}>Terms and Conditions StonksPizza</Text>
        <Text style={{ fontStyle: 'italic', marginHorizontal: 3.5, marginVertical: 10, fontSize: 13, }}>You can address any correspondence to: Mario Bresanone, Ruwe Putten 30, Neunen</Text>
        <ScrollView style={{ marginHorizontal: 10, }} showsHorizontalScrollIndicator={false} showsVerticalScrollIndicator={false}>
          <View style={styles.textContainer}>
            <View style={{ flexDirection: 'row', }}>
              <MaterialCommunityIcons name='circle-small' color={'black'} size={25} />
              <Text style={{ marginTop: 5, }}>Agreement</Text>
            </View>
            <Text>
              By placing an order on the website www.StonksPizza.nl you accept the offer of the franchisee of StonksPizzaNetherlands B.V. which delivers in your postcode area and you enter into an agreement with this franchisee. This franchisee will deliver your order to you. Any questions and/or comments should therefore be addressed to the relevant franchisee. The contact details of the relevant franchisee can be found in the confirmation email that you will receive following your order. Payments made via the website are made to StonksPizza Netherlands B.V., which in turn will ensure that the payment is transferred to the franchisee. StonksPizza Netherlands B.V. and/or its franchisees are hereinafter also referred to as StonksPizza.
            </Text>
          </View>

          <View style={styles.textContainer}>
            <View style={{ flexDirection: 'row', }}>
              <MaterialCommunityIcons name='circle-small' color={'black'} size={25} />
              <Text style={{ marginTop: 5, }}>Delivery</Text>
            </View>
            <Text>
              Voor bezorging van een bestelling geldt een minimumbedrag welke per winkel staat aangegeven. De prijzen die vermeld staan op de website zijn inclusief de kosten voor bezorging. Specials worden alleen bezorgd in combinatie met een pizza naar keuze.

              Bestellingen kunnen via internet geplaatst worden tot uiterlijk 5 minuten voor sluitingstijd van de desbetreffende winkel. De openingstijden staan vermeld op www.StonksPizza.nl.

              Bij afhaal wordt een korting op de pizzaprijs verleend. Tenzij anders vermeld zijn eventuele (promotionele) acties niet geldig in combinatie met de afhaalkorting.

              Alhoewel er naar gestreefd wordt uw bestelling binnen 30 minuten op het door u gewenste adres af te leveren, zijn er altijd omstandigheden, zoals weer en verkeer, die ertoe bijdragen dat deze indicatie niet gehaald kan halen.

              Het risico voor wat betreft de bestelling gaat over op u nadat de bestelling is geleverd en betaald.
            </Text>
          </View>



          <View style={styles.textContainer}>
            <View style={{ flexDirection: 'row', }}>
              <MaterialCommunityIcons name='circle-small' color={'black'} size={25} />
              <Text style={{ marginTop: 5, }}>Privacy statement</Text>
            </View>
            <Text>
              StonksPizza is very careful with its customer information and will
              never make it available to third parties. StonksPizza adheres to the rules stipulated in
              the Personal Data Protection Act (WBP), as well as the new European guidelines
              and the amendment of the WBP accordingly.
            </Text>
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
    marginVertical: 20,
  },
})


export default TermsScreen;