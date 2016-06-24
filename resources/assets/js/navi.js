import React from 'react';
import ReactDOM from 'react-dom';

class Nav extends React.Component {
	constructor() {
		super();

	}

	scroll(nav) {
		window.scrollTo( 0, 0 );
	}

	render() {
		return(
			<div className="nav-field">
				<div id="toggle"><p>びーちぱーりぃ<span className="icon-043"></span></p></div>
				<ul id="nav-list">
					<li onClick={() => this.scroll("top")}><a className="list-a"><span className="icon-194"></span>top</a></li>
					<li><a className="list-a" href="#info"><span className="icon-313"></span>info</a></li>
					<li><a className="list-a" href="#entry"><span className="icon-051"></span>join</a></li>
					<li><a className="list-a" href="#contact"><span className="icon-140"></span>contact</a></li>
				</ul>
			</div>
		);
	}
}

ReactDOM.render(
	<Nav />,
	document.getElementById('nav')
);
