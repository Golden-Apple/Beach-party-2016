import React from 'react';
import ReactDOM from 'react-dom';

class Nav extends React.Component {
	constructor() {
		super();
	}

	render() {
		return(
			<div className="nav-field">
				<ul className="nav-list">
					<li className="nav-title">びーちぱーりぃ</li>
					<li><a>top</a></li>
					<li><a>info</a></li>
					<li><a>form</a></li>
					<li><a>contact</a></li>
				</ul>
			</div>
		);
	}
}

ReactDOM.render(
	<Nav />,
	document.getElementById('nav')
);
