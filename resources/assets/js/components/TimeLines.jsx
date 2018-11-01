import React, { Component } from "react";
import Timeline from "react-calendar-timeline";
// make sure you include the timeline stylesheet or the timeline will not be styled
import "react-calendar-timeline/lib/Timeline.css";
import moment from "moment";

// const group = [{ id: 1, title: "group 1" }, { id: 2, title: "group 2" }];
// const groups = [];
// console.log(groups);
const item = [
    {
        id: 1,
        group: 1,
        title: "item 1",
        start_time: moment("20111031", "YYYYMMDD").fromNow(),
        end_time: moment("20111031", "YYYYMMDD").fromNow(),
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
console.log(moment(new Date("2018-06-01")));
console.log(item);
class Timelines extends Component {
    constructor() {
        super();
        this.state = {
            groups: [],
            items: []
        };
        console.log(this.state.groups);
        console.log(this.state.items);
    }
    render() {
        return (
            <div>
                {/* <div>
                    {this.state.items.map(item => (
                        <h4 key={item.id}>{item.title}</h4>
                    ))}
                </div> */}
                <Timeline
                    groups={this.state.groups}
                    // items={item}
                    items={this.state.items}
                    // items= {this.state.items.map(item)=>(
                    //     id= 1,
                    //     group: 1,
                    //     title: "item 1",
                    //     start_time: moment("20111031", "YYYYMMDD").fromNow(),
                    //     end_time: moment("20111031", "YYYYMMDD").fromNow(),
                    //     canMove: true,
                    //     canResize: false,
                    //     canChangeGroup: false,
                    //     className: "weekend",
                    //     style: {
                    //         backgroundColor: "fuchsia"
                    //     },
                    //     itemProps: {
                    //         // these optional attributes are passed to the root <div /> of each item as <div {...itemProps} />
                    //         "data-custom-attribute": "Random content",
                    //         "aria-hidden": true,
                    //         onDoubleClick: () => {
                    //             console.log("You clicked double!");
                    //         }
                    //     }
                    // )
                    // }
                    defaultTimeStart={moment(new Date("2018-06-01"))}
                    defaultTimeEnd={moment(new Date("2018-12-01"))}
                />
            </div>
        );
    }
    componentDidMount() {
        this.fetchData();
    }
    fetchData() {
        console.log("promise");
        Promise.all([
            fetch("http://127.0.0.1:8000/allGroups"),
            fetch("http://127.0.0.1:8000/allItems")
        ])
            .then(([res1, res2]) => Promise.all([res1.json(), res2.json()]))
            .then(
                ([data1, data2s]) => (
                    data2s.map(data2 => {
                        console.log(data2s);
                        console.log(data1);

                        var items = [...this.state.items];
                        var index = 0;
                        var toPush = {
                            id: data2.id,
                            group: data2.group_id,
                            title: data2.title,
                            start_time: moment(new Date(data2.start_time)),
                            end_time: moment(new Date(data2.end_time)),
                            // end_time: moment(
                            //     data2.end_time,
                            //     "YYYY-MM-DD"
                            // ).fromNow(),
                            canMove: data2.canMove,
                            canResize: data2.canResize,
                            canChangeGroup: data2.canChangeGroup,
                            className: data2.className,
                            style: {
                                backgroundColor: data2.backgroundColor
                            },
                            itemProps: {
                                // these optional attributes are passed to the root <div /> of each item as <div {...itemProps} />
                                "data-custom-attribute": "Random content",
                                "aria-hidden": true,
                                onDoubleClick: () => {
                                    // console.log(data2.githubAccount);
                                    <a href="data2.githubAccount" />;
                                }
                            }
                        };
                        items.push(toPush);

                        console.log(toPush);
                        this.setState({ items: items });
                    }),
                    this.setState({
                        groups: data1
                    })
                )
            )
            .catch(error => console.log("parsing failed", error));
        // console.log(fetch);
    }
}

export default Timelines;
