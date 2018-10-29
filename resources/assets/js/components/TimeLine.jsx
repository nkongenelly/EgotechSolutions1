import React, { Component } from "react";
import Timeline from "react-calendar-timeline";
// make sure you include the timeline stylesheet or the timeline will not be styled
import "react-calendar-timeline/lib/Timeline.css";
import moment from "moment";

const groups = [{ id: 1, title: "group 1" }, { id: 2, title: "group 2" }];

const items = [
    {
        id: 1,
        group: 1,
        title: "item 1",
        start_time: moment(),
        end_time: moment().add(1, "hour"),
        canMove: true,
        canResize: false,
        canChangeGroup: false,
        className: "weekend",
        style: {
            backgroundColor: "fuchsia"
        },
        itemProps: {
            // these optional attributes are passed to the root <div /> of each item as <div {...itemProps} />
            "data-custom-attribute": "Random content",
            "aria-hidden": true,
            onDoubleClick: () => {
                console.log("You clicked double!");
            }
        }
    },
    {
        id: 2,
        group: 2,
        title: "item 2",
        start_time: moment().add(-0.5, "day"),
        end_time: moment().add(0.5, "day"),
        canMove: true,
        canResize: false,
        canChangeGroup: false,
        className: "weekend",
        style: {
            backgroundColor: "fuchsia"
        },
        itemProps: {
            // these optional attributes are passed to the root <div /> of each item as <div {...itemProps} />
            "data-custom-attribute": "Random content",
            "aria-hidden": true,
            onDoubleClick: () => {
                console.log("You clicked double!");
            }
        }
    },
    {
        id: 3,
        group: 1,
        title: "item 3",
        start_time: moment().add(2, "day"),
        end_time: moment().add(3, "day"),
        canMove: true,
        canResize: false,
        canChangeGroup: false,
        className: "weekend",
        style: {
            backgroundColor: "fuchsia"
        },
        itemProps: {
            // these optional attributes are passed to the root <div /> of each item as <div {...itemProps} />
            "data-custom-attribute": "Random content",
            "aria-hidden": true,
            onDoubleClick: () => {
                console.log("You clicked double!");
            }
        }
    }
];

class Timelines extends Component {
    render() {
        return (
            <div>
                <Timeline
                    groups={groups}
                    items={items}
                    defaultTimeStart={moment().add(-12, "day")}
                    defaultTimeEnd={moment().add(12, "day")}
                />
            </div>
        );
    }
}

export default Timelines;
