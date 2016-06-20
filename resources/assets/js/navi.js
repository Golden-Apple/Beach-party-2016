import React from 'react';
import ReactDOM from 'react-dom';

class Nav extends React.Component {
	constructor() {
		super();

	}

	scroll(nav) {

		switch (nav) {
			case "top":
				window.scrollTo( 0, 0 );
				break;
			case "info":
				if ( screen.width > 480 ) {
					window.scrollTo( 0, 842 );
					break;
				}
				window.scrollTo( 0, 686);
				break;
			case "entry":
				if ( screen.width > 480 ) {
					window.scrollTo( 0, 2243 );
					break;
				}
				window.scrollTo( 0 , 2423 );
				break;
			case "contact":
				if ( screen.width > 480 ) {
					window.scrollTo( 0, 3418 );
					break;
				}
				window.scrollTo( 0, 3601 );
				break;
			default :
				window.scrollTo( 0, 0 );

		}
	}

	render() {
		return(
			<div className="nav-field">
				<div id="toggle"><p>びーちぱーりぃ<span className="icon-043"></span></p></div>
				<ul id="nav-list">
					<li onClick={() => this.scroll("top")}><a className="list-a"><span className="icon-194"></span>top</a></li>
					<li onClick={() => this.scroll("info")}><a className="list-a"><span className="icon-313"></span>info</a></li>
					<li onClick={() => this.scroll("entry")}><a className="list-a"><span className="icon-051"></span>join</a></li>
					<li onClick={() => this.scroll("contact")}><a className="list-a"><span className="icon-140"></span>contact</a></li>
				</ul>
			</div>
		);
	}
}

ReactDOM.render(
	<Nav />,
	document.getElementById('nav')
);
