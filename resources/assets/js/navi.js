import React from 'react';
import ReactDOM from 'react-dom';

class Nav extends React.Component {
	constructor() {
		super();
	}

	render() {
		return(
			<div className="nav-field">
				<div id="toggle"><p>びーちぱーりぃ<span className="icon-043"></span></p></div>
				<ul id="nav-list">
					<li><a href="/">top</a></li>
					<li><a href="#info">info</a></li>
					<li><a href="#entry">form</a></li>
					<li><a href="#contact">contact</a></li>
				</ul>
			</div>
		);
	}
}

ReactDOM.render(
	<Nav />,
	document.getElementById('nav')
);
