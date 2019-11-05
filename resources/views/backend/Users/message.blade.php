@extends('layouts/dash')
@section('dash')

    <tr>
        <td align="center" valign="top" width="100%" style="background-color: #ffffff;  border-top: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5;">
            <center>
                <table cellpadding="0" cellspacing="0" width="600" class="w320">
                    <tr>
                        <td class="item-table">
                            <table cellspacing="0" cellpadding="0" width="100%">
                                <tr>
                                    <td class="title-dark" width="100">Emeteur</td>
                                    <td class="title-dark" width="300"> Message</td>
                                    <td class="title-dark" width="97"> status</td>
                                </tr>
// BOUCLE message
                                <tr>
                                    <td class="item-col item">
                                        <table cellspacing="0" cellpadding="0" width="100%">
                                            <tr>
                                                <td class="user"><p> User</p></td>
                                                <td class="info">
                                                    <span style="color: #4d4d4d; font-weight:bold;">appart N° </span>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="item-col message"> message</td>
                                    <td class="item-col"> Validé appart style syndic</td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                </table>
            </center>
        </td>
    </tr>
@endsection
