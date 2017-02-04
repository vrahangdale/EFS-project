@extends('app')
@section('content')
    <h1>Mutualfund </h1>
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Mutualfund Name</td>
                <td><?php echo ($mutualfund['name']); ?></td>
            </tr>
            <tr>
                <td>Mutualfund Fund Name</td>
                <td><?php echo ($mutualfund['fund_name']); ?></td>
            </tr>
            <tr>
                <td>Mutualfund Purchase Price </td>
                <td><?php echo ($mutualfund['purchase_price']); ?></td>
            </tr>
            <tr>
                <td>Mutualfund Purchased Date </td>
                <td><?php echo ($mutualfund['purchased_date']); ?></td>
            </tr>

            </tbody>
        </table>
    </div>
@stop

