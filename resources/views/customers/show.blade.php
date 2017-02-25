@extends('app')
@section('content')
    <h1>Customer </h1>

    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Name</td>
                <td><?php echo ($customer['name']); ?></td>
            </tr>
            <tr>
                <td>Cust Number</td>
                <td><?php echo ($customer['cust_number']); ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo ($customer['address']); ?></td>
            </tr>
            <tr>
                <td>City </td>
                <td><?php echo ($customer['city']); ?></td>
            </tr>
            <tr>
                <td>State</td>
                <td><?php echo ($customer['state']); ?></td>
            </tr>
            <tr>
                <td>Zip </td>
                <td><?php echo ($customer['zip']); ?></td>
            </tr>
            <tr>
                <td>Home Phone</td>
                <td><?php echo ($customer['home_phone']); ?></td>
            </tr>
            <tr>
                <td>Cell Phone</td>
                <td><?php echo ($customer['cell_phone']); ?></td>
            </tr>


            </tbody>
      </table>
    </div>


          
    <h3>
        <?php echo 'Total of Initial Stock Portfolio $' , number_format ($stotal,2); ?>
        <br>
        <?php echo 'Total of Current Stock Portfolio $', number_format ($svalue,2) ?>
    </h3>
    </div>

    <br>
    <h2>Investments </h2>
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr class="bg-info">
                <th> Category </th>
                <th>Description</th>
                <th>Acquired Value</th>
                <th>Acquired Date</th>
                <th>Recent Value</th>
                <th>Recent Date</th>

            </tr>
            </thead>

            <tbody>




            @foreach($customer->investments as $investment)
                <tr>
                    <td>{{ $investment->category }}</td>
                    <td>{{ $investment->description }}</td>
                    <td>{{ $investment->acquired_value }}</td>
                    <td>{{ $investment->acquired_date }}</td>
                    <td>{{ $investment->recent_value }}</td>
                    <td>{{ $investment->recent_date }}</td>
                    <?php $itotal = $itotal + $investment['acquired_value']?>
                    <?php $ivalue = $ivalue + $investment['recent_value'] ?>
                </tr>

            @endforeach

            </tbody>
        </table>
        <h3>
        <?php echo 'Total of Initial Investment Portfolio $', number_format($itotal,2); ?>
        <br>
        <?php echo 'Total of Current Investment Portfolio $', number_format($ivalue,2); ?>
        </h3>
        <br>
        <h2>Summary of Portfolio </h2>
        <h3>
        <?php $iportfolio = $stotal + $itotal;?>
        <?php echo 'Total of Initial Portfolio Value $', number_format($iportfolio,2); ?>        <br>
        <?php $cportfolio = $svalue + $ivalue;?>
        <?php echo 'Total of Current Investment Portfolio $', number_format($cportfolio,2) ?>
        </h3>
    </div>

@stop
