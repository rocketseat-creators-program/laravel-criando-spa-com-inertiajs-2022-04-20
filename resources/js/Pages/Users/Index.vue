<template>
    <div class='mt-4 mx-auto max-w-md h-screen'>
        <div class='flex flex-col gap-4'>
            <div class='flex gap-2 items-center'>
                <h1 class='text-2xl font-bold text-red-500'>Listagem de Usuários</h1>
                <Link href="/create" class='text-blue-500 font-bold underline'>Novo Usuário</Link>
            </div>

            <ul v-for="user in users" :key="user.id" class='flex flex-col gap-2'>
                <li>{{ user.name }}</li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        users: Object,
    }
}
</script>
