getData();
var rol = document.getElementById('user').content;
document.getElementById('myForm').onsubmit = async function(e)
{
    e.preventDefault();
    let res = await fetch('index.php?controller=admin&action=create' , {
        method: 'POST',
        body: new FormData(this)
    })
    let data = await res.json();
    console.log(data);
    if (data['sucess'] === true)
    {
        $('#admin').trigger('reset')
        $('$admin').modal('toggle')
        await getData();
    }
}

async function getData()
{
    let res = await fetch('index.php?controller=admin&action=getData');
    let data = await res.json();
    console.log(data);
    let html = "";
    data.forEach(admin => {
        html += `
        <tr class="table-dark">
            <td scope="row">${admin.name}</td>
            <td scope="row">${admin.type_document}</td>
            <td scope="row">${admin.document}</td>
            <td scope="row">${admin.cellphone}</td>    
            <td scope="row"><a href="index.php?controller=Paciente&action=ListDates&id=${admin.document}"><img src="images/agenda.svg" alt="Editar" class="btn-1"></a></td>
            <td scope="row"><a href="index.php?controller=Paciente&action=Edit&id=${admin.document}"><img src="images/lapiz.svg" alt="Editar" class="btn-1"></a></td>
            <td scope="row"><a  onclick="javascript:return confirm('¿Seguro que deseas eliminar este registro?')" href='index.php?controller=Paciente&action=Delete&id=${admin.document}'><img src="images/basura.svg" alt="Borrar" class="btn-1"></a></td> 
        </tr>       
        `
    });
}