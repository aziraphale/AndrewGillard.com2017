@extends('layout.master')

@section('content')
<article class="dwrods">
    <p>Mishal will make faith rods on request, either for Sek followers, or for priests or followers of other gods.</p>

    <p>The following rods have already been completed and are ready to be purchased immediately.</p>

    <h3>Batons (Single rituals)</h3>
    <table>
        <thead>
            <tr>
                <th>Ritual</th>
                <th>Baton type</th>
                <th>Charge level</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Cure Medium Wounds</td>
                <td>Pale yellow baton</td>
                <td>Impressed</td>
                <td>A$300</td>
            </tr>
            <tr>
                <td>Major Shield</td>
                <td>Pale yellow baton</td>
                <td>Impressed</td>
                <td>A$500</td>
            </tr>
            <tr>
                <td>Light</td>
                <td>Purple baton</td>
                <td>Imprinted</td>
                <td>A$1000</td>
            </tr>
            <tr>
                <td>Profound Darkness</td>
                <td>Ribboned baton</td>
                <td>Imprinted</td>
                <td>A$1500</td>
            </tr>
            <tr>
                <td>Visions</td>
                <td>Wooden baton</td>
                <td>Imprinted</td>
                <td>A$1500</td>
            </tr>
            <tr>
                <td>Holy Weapon</td>
                <td>Serrated baton</td>
                <td>Imprinted</td>
                <td>A$1500</td>
            </tr>
            <tr>
                <td>Holy Sacrifice</td>
                <td>Purple baton</td>
                <td>Imprinted</td>
                <td>A$1500</td>
            </tr>
            <tr>
                <td>Fear</td>
                <td>Coral baton</td>
                <td>Imprinted</td>
                <td>A$1500</td>
            </tr>
        </tbody>
    </table>

    <h3>Canes (Two rituals)</h3>
    <table>
        <thead>
            <tr>
                <th>Rituals</th>
                <th>Cane type</th>
                <th>Charge level</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="4"><i>All sold out. More on the way soon!</i></td>
            </tr>
        </tbody>
        <?php /* <tbody>
            <tr>
                <td>Restore &amp; Soothing Rain <b>(Consecrated to Gapp)</b></td>
                <td>Wooden Cane</td>
                <td><b>IMBUED</b> (Both glow with a dull light, thus cannot yet be used, but won't take long for a Gappic priest to charge to impressed)</td>
                <td>A$500</td>
            </tr>
        </tbody> */ ?>
    </table>
</article>
@endsection
