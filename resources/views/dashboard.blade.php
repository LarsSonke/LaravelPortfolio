@extends('layout')

@section('content')
    <h1>Dashboard</h1>
    <table>
        <tr>
            <th>Quartile</th>
            <th>Course</th>
            <th>EC</th>
            <th>Exam</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td rowspan="3">1</td>
            <td>Programme and Career Orientation</td>
            <td>2,5</td>
            <td>Assessment Exam</td>
            <td></td>
        </tr>
        <tr>
            <td>Computer Science Basics</td>
            <td>5</td>
            <td>Written Exam</td>
            <td></td>
        </tr>
        <tr>
            <td>Programming Basics</td>
            <td>5</td>
            <td>Case Study</td>
            <td></td>
        </tr>
        <tr>
            <td rowspan="2">2</td>
            <td rowspan="2">Object Oriented Programming</td>
            <td rowspan="2">10</td>
            <td>Case Study</td>
            <td></td>
        </tr>
        <td>Project</td>
        <td></td>
        <tr>
            <td rowspan="4">3</td>
            <td rowspan="3">Framework Development 1</td>
            <td rowspan="3">5</td>
            <td>Case Study</td>
            <td></td>
        </tr>
        <tr>
            <td>Project</td>
            <td></td>

        </tr>
        <tr>
            <td>Report</td>
            <td></td>

        </tr>
        <tr>
            <td>Framework Project 1</td>
            <td>7,5</td>
            <td>Assessment</td>
            <td></td>
        </tr>
        <tr>
            <td rowspan="3">4</td>
            <td rowspan="3">Framework Project 2</td>
            <td rowspan="3">10</td>
            <td>Portfolio</td>
            <td></td>
        </tr>
        <tr>
            <td>Project</td>
            <td></td>
        </tr>
        <tr>
            <td>Assessment</td>
            <td></td>
        </tr>
        <tr>
            <td rowspan="2">The entire year</td>
            <td>Personal Professional Development</td>
            <td>12,5</td>
            <td>Portfolio</td>
            <td></td>
        </tr>
        <tr>
            <td>Personality</td>
            <td>2,5</td>
            <td></td>
            <td></td>
        </tr>
    </table>

    <h4>EC Progress</h4>
    <div class="meter">
        <span style="width: 25%"></span>
    </div>
@endsection
