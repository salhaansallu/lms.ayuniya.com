import './bootstrap';
import '@fortawesome/fontawesome-free/js/all.js';
import DataTable from 'datatables.net-dt';
import $ from "jquery";
import Chart from 'chart.js/auto';
window.$ = $;
window.Chart = Chart;

import EditorJS from '@editorjs/editorjs';
import Header from '@editorjs/header';
import RawTool from '@editorjs/raw';
import ImageTool from '@editorjs/image';
import List from "@editorjs/list";
import Embed from '@editorjs/embed';
import Quote from '@editorjs/quote';
import AttachesTool from '@editorjs/attaches';

const editor = new EditorJS({
    placeholder: 'Add course content here',
    tools: {
        header: Header,
        raw: RawTool,
        image: {
            class: ImageTool,
            config: {
                endpoints: {
                    byFile: 'http://localhost:8008/uploadFile', // Your backend file uploader endpoint
                    byUrl: 'http://localhost:8008/fetchUrl', // Your endpoint that provides uploading by Url
                }
            }
        },
        list: {
            class: List,
            inlineToolbar: true,
            config: {
                defaultStyle: 'unordered'
            }
        },
        embed: Embed,
        quote: Quote,
        attaches: {
            class: AttachesTool,
            config: {
                endpoint: 'http://localhost:8008/uploadFile'
            }
        }
    },
});


import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

$(document).ready(function () {

    /// ==== Initialize Data Table ==== ///
    $('#dataTable').DataTable({
        "order": []
    });
    
    /// ==== Initialize Charts ==== ///
    const chart1 = document.getElementById('chart1');
    new Chart(chart1, {
        type: 'bar',
        data: {
            labels: ['Maths', 'Science', 'English', 'Histrory', 'Physics', 'Chemistry'],
            datasets: [{
                label: 'Students',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1
            }]
        },
        options: {
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    const chart2 = document.getElementById('chart2');
    new Chart(chart2, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Students',
                data: [3, 20, 15, 20, 50, 55],
                borderWidth: 1
            }]
        },
        options: {
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    const chart3 = document.getElementById('chart3');
    new Chart(chart3, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Instructors',
                data: [3, 20, 15, 20, 50, 55],
                borderWidth: 1
            }]
        },
        options: {
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});