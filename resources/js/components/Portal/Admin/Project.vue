<template>
    <div style="padding-top: 20px; ">
        <div >
        <iframe :src="'/Projects/'+project.project_folder_id+'/index.php'" width="87%" style="margin-left: 85px" height="400px" ></iframe>
        <div style="margin-left: 50px">
			<a style="margin-left: 50px; background-color: white; padding:5px" target = '_blank' 
			:href="'/Projects/'+project.project_folder_id+'/index.php'">
            <img src="/assets/thumbnails/view.png"></a> </div>
        </div>
<!-- 
        <div class="block" style="margin: 0px auto;">
	<div class="block-header">
		<div class="title" align="center">
			<h2>12 Comments</h2>
		</div>
	</div>
	<div class="writing">
		<div contenteditable="true" class="textarea"  autofocus spellcheck="false">
			
        </div>
		<div class="footer">
			<div class="text-format">
				<button class="btn"><i class="ri-bold"></i></button>
				<button class="btn"><i class="ri-italic"></i></button>
				<button class="btn"><i class="ri-underline"></i></button>
				<button class="btn"><i class="ri-list-unordered"></i></button>
			</div>
			<div class="group-button">
				<button class="btn"><i class="ri-at-line"></i></button>
				<button class="btn primary">Send</button>
			</div>
		</div>
	</div>

	<div class="comment" >
		<div class="user-banner">
			<div class="user">
				<div class="avatar">
					<img src="https://randomuser.me/api/portraits/men/86.jpg">
					<span class="stat grey"></span>
				</div>
				<h5>Floyd Miles</h5>
			</div>
			<button class="btn dropdown"><i class="ri-more-line"></i></button>
		</div>
		<div class="content">
			<p>Actually, now that I try out the links on my message, above, none of them take me to the secure site. Only my shortcut on my desktop, which I created years ago.</p>
		</div>
		<div class="footer">
			<span class="is-mute">6 hour</span>
		</div>
	</div>

    
	<div>
	
		
	</div>
	<div class="load">
		<span><i class="ri-refresh-line"></i>Loading</span>
	</div> 
</div> -->

        <!-- <form class="form" @submit.prevent="">
         <div class="form-input">
            <input type="search" placeholder="Comment...">
            <button type="submit" class="search-btn">
                Post
            </button>
         </div>
       </form> -->

    </div>
</template>

<script setup lang="ts">
   defineProps(['project'])
</script>

<style scoped>



/* .form {
	max-width: 400px;
	width: 100%;
	margin: 0px  auto;
}
.form-input {
	display: flex;
	align-items: center;
	height: 36px;
}
.form-input input {
	flex-grow: 1;
	padding: 0 16px;
	height: 100%;
	border: none;
	background: white;
	border-radius: 36px 0 0 36px;
	outline: none;
	width: 100%;
	color: var(--dark);
}

.form-input button {
	width:auto;
    padding: 5px;
	height: 100%;
	display: flex;
	justify-content: center;

	align-items: center;
	background: var(--blue);
	color: var(--light);
	font-size: 18px;
	border: none;
	outline: none;
	border-radius: 0 36px 36px 0;
	cursor: pointer;
}





.block {
	background: #fff;
	width: 504px;
	padding: 1rem;
	background: #ffffff;
	box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1), 0px 2px 1px rgba(0, 0, 0, 0.06),
		0px 1px 1px rgba(0, 0, 0, 0.08);
	border-radius: 8px;
	display: block;
	&-header {
		display: flex;
		align-items: center;
		justify-content: space-between;
		margin-bottom: 16px;
		.title {
			display: flex;
			align-items: flex-start;
			.tag {
				display: flex;
				align-items: center;
				justify-content: center;
				margin-left: 4px;
				background: #f7f7f7;
				color: #1c1c1c;
				text-align: center;
				padding: 0 4px;
				letter-spacing: 0.04em;
				text-transform: uppercase;
				font-weight: 500;
				font-size: 10px;
				line-height: 16px;
				border: 1px solid #e8e8e8;
				border-radius: 96px;
			}
		}
	}
}
.writing {
	background: #ffffff;
	border: 1px solid #e8e8e8;
	border-radius: 8px;
	overflow: hidden;
	margin-bottom: 24px;
	padding: 12px;
	.textarea {
		width: 100%;
		font-family: "Inter";
		color: #585757;
		height: 50px;
		overflow-y: auto;
		appearance: none;
		border: 0;
		outline: 0;
		resize: none;
		font-size: 16px;
		line-height: 24px;
	}
	&:focus-within {
		border: 1px solid #0085ff;
		box-shadow: 0px 0px 2px 2px rgba(0, 133, 255, 0.15);
	}
	.footer {
		margin-top: 12px;
		padding-top: 12px;
		display: flex;
		align-items: center;
		justify-content: space-between;
		border-top: 1px solid #e8e8e8;
		.text-format {
			display: flex;
			align-items: center;
			gap: 12px;
		}
	}
}
.comment {
	display: grid;
    margin: 0px  auto;
	gap: 14px;
	.user-banner {
		display: flex;
		justify-content: space-between;
		align-items: center;
		.user {
			gap: 8px;
			align-items: center;
			display: flex;
			.avatar {
				height: 32px;
				width: 32px;
				display: flex;
				align-items: center;
				justify-content: center;
				border: 1px solid transparent;
				position: relative;
				border-radius: 100px;
				font-weight: 500;
				font-size: 13px;
				line-height: 20px;
				img {
					max-width: 100%;
					border-radius: 50%;
				}
				.stat {
					display: flex;
					position: absolute;
					right: -2px;
					bottom: -2px;
					display: block;
					width: 12px;
					height: 12px;
					z-index: 9;
					border: 2px solid #ffffff;
					border-radius: 100px;
					&.green {
						background: #00ba34;
					}
					&.grey {
						background: #969696;
					}
				}
			}
		}
	}
	.footer {
		gap: 12px;
		display: flex;
		align-items: center;
		.reactions {
			display: flex;
			align-items: center;
			gap: 8px;
		}
		
	}
	&:not(.comment:first-child) {
		padding-bottom: 12px;
		margin-bottom: 12px;
		border-bottom: 1px solid #e8e8e8;
	}
	& + & {
		padding-top: 12px;
	}
	&.reply {
		.user-banner,
		.content,
		.footer {
			margin-left: 32px;
		}
	}
}
.group-radio {
	position: relative;
	display: flex;
	user-select: none;
	align-items: stretch;
	.button-radio {
		box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.06);
		label {
			cursor: pointer;
			padding: 4px 8px;
			font-weight: 500;
			font-size: 14px;
			display: flex;
			height: 28px;
			align-items: center;
			line-height: 28px;
			transition: 0.2s ease;
		}
		&:first-child {
			border-top-left-radius: 8px;
			border-bottom-left-radius: 8px;
			border-left: 1px solid #e8e8e8;
			border-top: 1px solid #e8e8e8;
			border-bottom: 1px solid #e8e8e8;
		}
		&:last-child {
			border-top-right-radius: 8px;
			border-right: 1px solid #e8e8e8;
			border-top: 1px solid #e8e8e8;
			border-bottom: 1px solid #e8e8e8;
			border-bottom-right-radius: 8px;
		}
		input[type="radio"] {
			display: none;
			&:checked + label {
				background: #f7f7f7;
			}
		}
	}
	
}
h5 {
	font-size: 16px;
	font-weight: 500;
	line-height: 24px;
	color: #1c1c1c;
	letter-spacing: 0em;
	text-align: left;
}
.btn {
	appearance: none;
	background: transparent;
	border: 0;
	padding: 0;
	display: flex;
	font: inherit;
	align-items: center;
	justify-content: center;
	cursor: pointer;
	color: #1c1c1c;
	transition: 0.2s ease;
	i {
		color: #969696;
		font-size: 18px;
		transition: 0.15s ease-in-out;
	}
	&.primary {
		min-width: 64px;
		padding: 8px 12px;
		height: 40px;
		color: #fff;
		display: inline-flex;
		background: #0085ff;
		box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1), 0px 2px 1px rgba(0, 0, 0, 0.06),
			0px 1px 1px rgba(0, 0, 0, 0.08);
		border-radius: 8px;
		&:hover {
			background: lighten(#0085ff, 10%);
		}
	}
	&:hover {
		i {
			opacity: 0.7;
		}
	}
	outline: none;
	img {
		max-width: 18px;
		height: auto;
	}
	&.react {
		padding: 4px 8px 4px 4px;
		background: #f7f7f7;
		border: 1px solid #e8e8e8;
		border-radius: 8px;
		gap: 4px;
		&:hover {
			background-color: #eee;
		}
	}
	&.dropdown {
		display: flex;
		cursor: pointer;
		border-radius: 50%;
		align-items: center;
		justify-content: center;
		padding: 0;
		width: 26px;
		height: 26px;
		&:hover {
			background-color: #eee;
		}
	}
}
p {
	line-height: 24px;
	a.tagged-user {
		display: inline-flex;
		padding: 2px 8px;
		background: #e5f3ff;
		border-radius: 256px;
		color: #0085ff;
	}
}
.is-mute {
	font-weight: 400;
	font-size: 13px;
	line-height: 20px;
	color: #969696;
}
a {
	font-weight: 500;
	font-size: 13px;
	line-height: 20px;
	color: #1c1c1c;
	text-decoration: none;
	transition: opacity 0.15s ease-in-out;
	&:hover {
		opacity: 0.7;
	}
}
h2 {
	font-weight: 500;
	font-size: 20px;
	line-height: 28px;
	color: #1c1c1c;
}
* {
	box-sizing: border-box;
}
.load {
	display: flex;
	align-items: center;
	justify-content: center;
	span {
		display: flex;
		align-items: center;
		font-weight: 400;
		font-size: 13px;
		line-height: 20px;
		color: #969696;
		i {
			margin-right: 6px;
		}
	}
}
.group-button {
	display: flex;
	gap: 16px;
} */


</style>