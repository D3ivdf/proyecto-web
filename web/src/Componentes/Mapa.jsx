import React from 'react'
import { GoogleMap, useJsApiLoader } from '@react-google-maps/api';
import '../Estilos/mapa.css'

const containerStyle = {
  width: '800px',
  height: '400px',
  borderRadius: '20px',
  display: 'flex',
  alignItem: 'center',
  justifyContent: 'center',
  textAling: 'center',
  margin: 'auto',
  boxShadow: '0px 0px 10px 0px rgba(0,0,0,0.75)'

};

const center = {
  lat: 5.065960713049606,
  lng: -75.49068198649893
};

function MyComponent() {
  const { isLoaded } = useJsApiLoader({
    id: 'google-map-script',
    googleMapsApiKey: "AIzaSyArNaYSI8cz3_QwoiwOXabhVH1BP05pA-g"
  })

  const [map, setMap] = React.useState(null)

  const onLoad = React.useCallback(function callback(map) {
    // This is just an example of getting and using the map instance!!! don't just blindly copy!
    const bounds = new window.google.maps.LatLngBounds(center);
    map.fitBounds(bounds);

    setMap(map)
  }, [])

  const onUnmount = React.useCallback(function callback(map) {
    setMap(null)
  }, [])

  return isLoaded ? (
    <div className='mapa'>
    <GoogleMap
    mapContainerStyle={containerStyle}
    center={center}
    zoom={10}
    onLoad={onLoad}
    onUnmount={onUnmount}
  >
    { /* Child components, such as markers, info windows, etc. */ }
    <></>
  </GoogleMap></div>
  ) : <></>
}

export default React.memo(MyComponent)
