import React from 'react';
import ReactDOM from 'react-dom';

import { GoogleMapLoader, GoogleMap, Marker, InfoWindow } from 'react-google-maps';

class Map extends React.Component {
	constructor(props, context) {
		super(props, context);
	}

	render() {
		return (
			<GoogleMapLoader
				containerElement={ <div style={{ height: "100%",}} /> }
				googleMapElement={
					<GoogleMap containerProps={this.props} defaultZoom={16} defaultCenter={{ lat: 26.220658, lng: 127.664787 }} defaultOptions={{styles: require(`../json/MapStyle.json`),}}>
						<Marker defaultPosition={{ lat: 26.220658, lng: 127.664787 }} defaultIcon={'/assets/image/item-sisa.png'} >
							<InfoWindow>ここだよーん</InfoWindow>
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
