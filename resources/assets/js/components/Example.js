import React, { Component } from "react";
import ReactDOM from "react-dom";
import Timelines from "./TimeLines";
import "bootstrap/dist/css/bootstrap.css";

export default class Example extends Component {
    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <Timelines />
                </div>
            </div>
        );
    }
}

if (document.getElementById("example")) {
    ReactDOM.render(<Example />, document.getElementById("example"));
}
