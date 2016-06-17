import React from 'react';
import ReactDOM from 'react-dom';

import { GoogleMapLoader, GoogleMap, Marker, InfoWindow, DirectionsRenderer} from 'react-google-maps';

class Map extends React.Component {
	constructor(props, context) {
		super(props, context);

		this.state = {
			origin: new google.maps.LatLng(26.220253, 127.664808),
			destination: new google.maps.LatLng(26.211890, 127.675455),
			directions: null,
		};
	}

	componentDidMount() {
		var DirectionsService = new google.maps.DirectionsService();

		DirectionsService.route({
      origin: this.state.origin,
      destination: this.state.destination,
      travelMode: google.maps.TravelMode.WALKING,
    }, (result, status) => {
      if (status === google.maps.DirectionsStatus.OK) {
        this.setState({
          directions: result,
        });
      } else {
        console.error(`error fetching directions ${ result }`);
      }
    });
	}

	render() {
		return (
			<GoogleMapLoader
				containerElement={ <div style={{ height: "100%",}} /> }
				googleMapElement={
					<GoogleMap containerProps={this.props} defaultZoom={16} defaultCenter={{ lat: 24.222145, lng: 127.667405 }} defaultOptions={{styles: require(`../json/MapStyle.json`),}}>
						{this.state.directions ? <DirectionsRenderer directions={this.state.directions} /> : null}

						<Marker defaultPosition={{ lat: 26.222145, lng: 127.667405 }} defaultIcon={'/assets/image/item-sisa.png'} >
							<InfoWindow>ここが会場だよ</InfoWindow>
						</Marker>

					</GoogleMap>
				}
			/>
		);
	}
}

ReactDOM.render(
	<Map />,
	document.getElementById('map')
);
