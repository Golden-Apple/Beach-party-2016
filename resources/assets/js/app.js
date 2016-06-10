import React from 'react';
import ReactDOM from 'react-dom';

import { GoogleMapLoader, GoogleMap } from 'react-google-maps';

class Map extends React.Component {
	constructor(props, context) {
		super(props, context);

		this.state = {
			markers: [{
				position: {
					lat: 26.220658,
					lng: 127.664787,
				},
			}],
		}
	}

	render() {
		return (
			<GoogleMapLoader
				containerElement={ <div style={{ height: "100%",}} /> }
				googleMapElement={<GoogleMap containerProps={this.props} defaultZoom={18} defaultCenter={{ lat: 26.220658, lng: 127.664787 }} /> }
			/>

		);
	}
}

ReactDOM.render(
	<Map />,
	document.getElementById('map')
);
